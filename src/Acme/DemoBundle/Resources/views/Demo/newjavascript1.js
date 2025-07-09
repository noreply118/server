(function($) {
    window.jsonDump = function(data) {
        function f(key, value) {
            if (key == "startRates" || key == "currentRates" || key == "bocStartRates" || key == "bocCurrentRates") return undefined;
            return value
        }
        var showDebugRates = typeof data.showDebugRates != "undefined" ? data.showDebugRates() : false;
        return ko.toJSON(data, showDebugRates ? null : f, 2)
    };
    if (typeof fdSlider != "undefined") fdSlider.bind = function(element, observable, min_observable, max_observable, dragObservable) {
        var selector;
        var id;
        if (typeof element == "string") {
            selector = $("#" +
                element);
            id = element
        } else {
            selector = $(element);
            id = selector.attr("id")
        }
        if (typeof dragObservable == "function") {
            fdSlider.addCallback(id, "dragstart", function() {
                dragObservable(true)
            });
            fdSlider.addCallback(id, "dragend", function() {
                dragObservable(false)
            })
        }

        function isValidRange(a, b) {
            return typeof a != "undefined" && a !== null && typeof b != "undefined" && b !== null
        }
        if (isValidRange(min_observable, max_observable)) {
            if (typeof min_observable == "function") min_observable.subscribe(function(newVal) {
                fdSlider.setRange(id, newVal, ko.utils.unwrapObservable(max_observable))
            });
            if (typeof max_observable == "function") max_observable.subscribe(function(newVal) {
                fdSlider.setRange(id, ko.utils.unwrapObservable(min_observable), newVal)
            });
            fdSlider.setRange(id, ko.utils.unwrapObservable(min_observable), ko.utils.unwrapObservable(max_observable))
        }
        var locked = false;
        fdSlider.addCallback(id, "change", function() {
            if (!locked) {
                locked = true;
                var v = selector.val();
                observable(v);
                locked = false
            }
        });

        function observableChanged(newVal) {
            if (!locked) {
                locked = true;
                selector.val(newVal);
                selector.trigger("change");
                locked = false
            }
        }
        observable.subscribe(observableChanged);
        observableChanged(observable())
    };
    if (!Object.create) Object.create = function(o) {
        if (arguments.length > 1) throw new Error("Object.create implementation only accepts the first parameter.");

        function F() {}
        F.prototype = o;
        return new F
    };
    ko.bindingHandlers.stopBinding = {
        init: function() {
            return {
                controlsDescendantBindings: true
            }
        }
    };
    ko.bindingHandlers.using = {
        "init": function(element, valueAccessor, allBindingsAccessor, viewModel, bindingContext) {
            var bindingValue = valueAccessor();
            if (typeof bindingValue != "object" || bindingValue === null) throw new Error("using binding must be used with an object");
            var innerContext = bindingContext["createChildContext"](bindingValue);
            ko.applyBindingsToDescendants(innerContext, element);
            return {
                "controlsDescendantBindings": true
            }
        }
    };
    ko.bindingHandlers.slideVisible = {
        init: function(element, valueAccessor, allBindingsAccessor) {
            var value = ko.utils.unwrapObservable(valueAccessor());
            if (value) $(element).show();
            else $(element).hide()
        },
        update: function(element, valueAccessor,
            allBindingsAccessor) {
            var value = valueAccessor();
            var allBindings = allBindingsAccessor();
            var valueUnwrapped = ko.utils.unwrapObservable(value);
            var duration = allBindings.slideDuration || 400;
            if (valueUnwrapped) $(element).slideDown(duration, function() {
                if (typeof fdSlider != "undefined") fdSlider.redrawAll()
            });
            else $(element).slideUp(duration)
        }
    };
    ko.bindingHandlers.fadeChange = {
        init: function(element, valueAccessor, allBindingsAccessor) {
            var prevVal = allBindingsAccessor().text();
            allBindingsAccessor().text.subscribe(function(newVal) {
                if (newVal ==
                    "$-" && newVal == prevVal) return;
                prevVal = newVal;
                $(element).stop("fadeTo");
                element.style.opacity = 0;
                $(element).fadeTo(ko.utils.unwrapObservable(valueAccessor()), 1)
            })
        }
    };
    ko.bindingHandlers.fadeVisible = {
        init: function(element, valueAccessor, allBindingsAccessor) {
            var value = ko.utils.unwrapObservable(valueAccessor());
            if (value) $(element).show();
            else $(element).hide()
        },
        update: function(element, valueAccessor, allBindingsAccessor) {
            var value = valueAccessor();
            var allBindings = allBindingsAccessor();
            var valueUnwrapped = ko.utils.unwrapObservable(value);
            var duration = allBindings.fadeDuration || 400;
            if (valueUnwrapped == true) $(element).fadeIn(duration, function() {
                if (typeof fdSlider != "undefined") fdSlider.redrawAll()
            });
            else $(element).fadeOut(duration)
        }
    };
    ko.bindingHandlers.datepicker = {
        init: function(element, valueAccessor, allBindingsAccessor) {
            var writeDelayer = ko.computed({
                read: function() {
                    return null
                },
                write: function(newVal) {
                    var observable = valueAccessor();
                    var val = observable();
                    if (!(val instanceof Date) && newVal != val || val instanceof Date && val.getTime() != newVal.getTime()) observable(newVal)
                }
            }).extend({
                throttle: 1
            });
            var defaultOptions = {
                onClose: function() {
                    $(element).trigger("change")
                },
                changeMonth: true,
                changeYear: true
            };
            var regionOptions = $.datepicker.regional[Globalize.culture().name];
            var userOptions = allBindingsAccessor().datepickerOptions;
            var options = $.extend(defaultOptions, regionOptions, userOptions);
            $(element).datepicker(options);
            ko.utils.registerEventHandler(element, "change", function() {
                var newDate = $(element).datepicker("getDate");
                writeDelayer(newDate)
            });
            ko.utils.domNodeDisposal.addDisposeCallback(element, function() {
                $(element).datepicker("destroy")
            })
        },
        update: function(element, valueAccessor) {
            var newDate = ko.utils.unwrapObservable(valueAccessor());
            var currentDate = $(element).datepicker("getDate");
            if (newDate - currentDate !== 0) $(element).datepicker("setDate", newDate)
        }
    };
    ko.subscribable.fn.int = function() {
        var target = this;
        return ko.computed({
            read: function() {
                return target()
            },
            write: function(newVal) {
                var v = parseInt(newVal, 10);
                if (isNaN(v) || newVal === null) target(null);
                else target(v)
            }
        })
    };
    ko.subscribable.fn.fixed = function(precision) {
        if (typeof precision == "undefined") precision =
            "";
        var target = this;
        return ko.computed({
            read: function() {
                return Globalize.format(target(), "n" + precision)
            },
            write: function(newVal) {
                target(Globalize.parseFloat(newVal))
            }
        })
    };
    ko.subscribable.fn.precision = function(precision) {
        if (typeof precision == "undefined") precision = 2;
        var target = this;
        return ko.computed({
            read: function() {
                var val = target();
                if (val === null) return null;
                return val.toPrecision(precision)
            },
            write: function(newVal) {
                target(Globalize.parseFloat(newVal))
            }
        })
    };
    ko.subscribable.fn.currency = function(precision,
        placeholder) {
        if (typeof precision == "undefined") precision = 0;
        if (typeof placeholder == "undefined") placeholder = null;
        var target = this;
        var self = ko.computed({
            read: function() {
                var amount = target();
                if (isNaN(amount) || amount === null) return placeholder;
                return Globalize.format(amount, "c" + precision)
            },
            write: function(newVal) {
                var oldVal = target();
                var newVal = Globalize.parseFloat(newVal);
                if (isNaN(newVal)) self.notifySubscribers(self());
                else target(newVal)
            }
        });
        return self
    };
    ko.subscribable.fn.percent = function(precision) {
        if (typeof precision ==
            "undefined") precision = "";
        var target = this;
        return ko.computed({
            read: function() {
                return Globalize.format(target(), "p" + precision)
            },
            write: function(newVal) {
                var p = Globalize.parseFloat(newVal.replace("%", "")) / 100;
                if (isNaN(p)) p = null;
                target(p)
            }
        })
    };
    ko.subscribable.fn.toggle = function() {
        var val = this();
        if (val !== null) this(!val)
    };
    ko.subscribable.fn.subscribeObservable = function(subscriber) {
        return this.subscribe(subscriber, subscriber)
    };
    ko.subscribable.fn.subscribeAndCall = function(callback, callbackTarget) {
        var boundCallback =
            callbackTarget ? callback.bind(callbackTarget) : callback;
        var ret = this.subscribe(boundCallback);
        boundCallback(this());
        return ret
    };
    ko.subscribable.fn.subscribeObservableAndCall = function(observable) {
        return this.subscribeAndCall(observable, observable)
    };
    ko.payFrequencyObservable = function(initial) {
        var target = ko.observable(initial);
        target.val = ko.computed({
            read: function() {
                var f = target();
                if (f == 12) return "monthly";
                else if (f == 24) return "semi_monthly";
                else if (f == 52) return "weekly";
                else if (f == 1) return "yearly";
                else return ""
            },
            write: function(newVal) {
                target(get_pay_periods(newVal))
            }
        });
        return target
    }
})(jQuery);
rh = window.rh || {};
(function() {
    rh.curDate = new Date;
    rh.unwrap = ko.utils.unwrapObservable;
    rh.isAnyNull = function() {
        for (var i = 0; i < arguments.length; i++)
            if (arguments[i] === null) return true;
        return false
    };

    function getDateString(date) {
        function twoDigitString(n) {
            if (n >= 10) return n;
            else return "0" + n
        }
        return date.getFullYear() + "/" + twoDigitString(date.getMonth() + 1) + "/" + twoDigitString(date.getDate())
    }

    function ensureObjectPath(ref) {
        if (arguments.length == 1) return ref;
        for (var i = 1; i < arguments.length; i++) {
            if (typeof ref[arguments[i]] == "undefined") ref[arguments[i]] = {};
            ref = ref[arguments[i]]
        }
        return ref
    }

    function pathExists(ref) {
        if (arguments.length == 1) return true;
        for (var i = 1; i < arguments.length; i++) {
            if (typeof ref[arguments[i]] == "undefined") return false;
            ref = ref[arguments[i]]
        }
        return true
    }
    rh.getProviderRateInfo = function(rates, bocRates, province, termMonths, posted) {
        var provinceRates = getProvinceRates(rates, bocRates, province);
        if (provinceRates) {
            var rateInfo = provinceRates[termMonths];
            if (rateInfo)
                if (!posted) {
                    delete rateInfo.postedRate;
                    delete rateInfo.bocRate
                } else {
                    delete rateInfo.rate;
                    if (rateInfo.postedRate) {
                        rateInfo.rate = rateInfo.postedRate;
                        delete rateInfo.postedRate
                    }
                }
            return rateInfo
        }
        return null
    };
    var rates = {};
    rh.getProviderRates = function(provider, date, observable) {
        if (!(provider && date)) return null;
        var dateString = getDateString(date);
        var rateKey = provider + "::" + dateString;
        if (typeof rates[rateKey] == "undefined") {
            rates[rateKey] = false;
            var qs = {
                min: true,
                provider: provider,
                type: "fixed",
                posted: "any"
            };
            observable.loading(true);
            var xhr = $.getJSON("/api/historical-rates/" + dateString, qs);
            xhr.success(function(data,
                textStatus, jqXHR) {
                var newData = {};
                if (data) $.each(data, function() {
                    var prov = this.province ? this.province.toLowerCase() : "all";
                    var ref = ensureObjectPath(newData, prov, this.term_months);
                    if (this.posted || provider == "boc") ref.postedRate = this.rate / 100;
                    else ref.rate = this.rate / 100
                });
                rates[rateKey] = newData;
                observable(newData)
            }).always(function() {
                observable.loading(false)
            })
        } else if (rates[rateKey]) observable(rates[rateKey])
    };

    function getProvinceRates(rates, bocRates, province) {
        if (province) province = province.toLowerCase();
        if (bocRates == null) return null;
        var ret = {};
        for (var term in bocRates["all"])
            if (bocRates["all"].hasOwnProperty(term)) {
                ensureObjectPath(ret, term);
                ret[term].bocRate = bocRates["all"][term].postedRate
            }
        if (rates) {
            if (typeof rates["all"] != "undefined")
                for (var term in rates["all"])
                    if (rates["all"].hasOwnProperty(term)) {
                        ensureObjectPath(ret, term);
                        if (typeof rates["all"][term]["postedRate"] != "undefined") ret[term].postedRate = rates["all"][term]["postedRate"];
                        if (typeof rates["all"][term]["rate"] != "undefined") ret[term].rate =
                            rates["all"][term]["rate"]
                    }
            if (typeof rates[province] != "undefined")
                for (var term in rates[province])
                    if (rates[province].hasOwnProperty(term)) {
                        ensureObjectPath(ret, term);
                        if (typeof rates[province][term]["postedRate"] != "undefined") ret[term].postedRate = rates[province][term]["postedRate"];
                        if (typeof rates[province][term]["rate"] != "undefined") ret[term].rate = rates[province][term]["rate"]
                    }
        }
        return ret
    }
})();
(function(rh, $) {
    var curDate = rh.curDate;

    function Mortgage() {}

    function createComputedProperties() {
        var self = this;
        this.endDate = ko.computed(function() {
            return rh.endDate(self)
        });
        this.monthsElapsed = ko.computed(function() {
            var start = rh.unwrap(self.startDate);
            if (start) {
                var days = days_between(start, curDate);
                return Math.round(days / 365.25 * 12)
            } else return null
        });
        this.monthsRemaining = ko.computed(function() {
            var end = self.endDate();
            if (end) {
                var days = days_between(curDate, end);
                return Math.round(days / 365.25 * 12)
            } else return null
        });
        this.estimatedPayment = ko.computed(function() {
            return rh.estimatePayment(self)
        });
        this.estimatedPrincipal = ko.computed(function() {
            return rh.principalAtDate(self, curDate)
        });
        this.termCompleted = ko.computed(function() {
            return rh.isTermCompleted(self)
        });
        this.paymentsRemaining = ko.computed(function() {
            return rh.paymentsRemaining(self)
        });
        this.paymentsRemainingInTerm = ko.computed(function() {
            var endDate = self.endDate();
            var payFreq = self.payFrequency();
            if (endDate && payFreq) return Math.floor(days_between(curDate, endDate) /
                365.25 * payFreq);
            else return null
        });
        this.interestToMaturity = ko.computed(function() {
            return self.interestAtDate(self.endDate()) - self.interestAtDate(curDate)
        });
        this.totalInterest = ko.computed(function() {
            return self.paymentsRemaining() * self.payment() - self.principal()
        });
        this.monthlyPayment = ko.computed(function() {
            return rh.monthlyPayment(self)
        });
        this.isNegativeAmortization = ko.computed(function() {
            var payment = self.payment();
            var principal = self.principal();
            var rate = self.rate.value();
            var freq = self.payFrequency();
            rate = nominal_to_effective(rate, freq);
            return principal * rate >= payment * freq
        });
        this.ratesLoading = ko.computed(function() {
            return self.originalRates.loading() || self.bocOriginalRates.loading()
        });
        this.posted = ko.computed({
            read: function() {
                if (!self.originalRates() && !self.originalRates.loading()) {
                    ko.computed(function() {
                        var provider = parseInt(self.rate.provider(), 10);
                        rh.getProviderRates(provider, self.startDate(), self.originalRates)
                    });
                    return
                }
                var termMonths = self.rate.term() * 12;
                var rateInfo = rh.getProviderRateInfo(self.originalRates(),
                    self.bocOriginalRates(), self.rate.province(), termMonths, true);
                if (rateInfo && rateInfo.rate) return rateInfo.rate;
                if (self.discount() != null) return self.rate.value() + self.discount()
            },
            deferEvaluation: true
        });
        this.isPostedKnown = ko.computed(function() {
            if (!self.originalRates() || self.originalRates.loading()) return;
            var termMonths = self.rate.term() * 12;
            var rateInfo = rh.getProviderRateInfo(self.originalRates(), self.bocOriginalRates(), self.rate.province(), termMonths, true);
            return !!rateInfo.rate
        });
        this.estimatedDiscount =
            ko.computed({
                read: function() {
                    if (!self.bocOriginalRates() && !self.bocOriginalRates.loading()) {
                        ko.computed(function() {
                            rh.getProviderRates("boc", self.startDate(), self.bocOriginalRates)
                        });
                        return
                    }
                    var termMonths = self.rate.term() * 12;
                    var rateInfo = rh.getProviderRateInfo(self.originalRates(), self.bocOriginalRates(), self.rate.province(), termMonths, true);
                    if (rateInfo && rateInfo.bocRate) return rateInfo.bocRate - self.rate.value()
                },
                deferEvaluation: true
            });
        return this
    }
    Mortgage.prototype.interestAtDate = function(endDate) {
        return rh.interestAtDate(this,
            endDate)
    };
    Mortgage.prototype.toJS = function() {
        var d = rh.unwrap(this.startDate);
        return {
            principal: this.principal(),
            originalPrincipal: this.originalPrincipal(),
            payment: this.payment(),
            payFrequency: this.payFrequency.val(),
            rate: this.rate.toJS(),
            discount: this.discount(),
            amortization: this.amortization(),
            startDate: d ? d.getTime() : null
        }
    };
    Mortgage.prototype.loadJS = function(data) {
        if (data) {
            this.principal(data.principal);
            this.originalPrincipal(data.originalPrincipal);
            this.payment(data.payment);
            this.payFrequency.val(data.payFrequency);
            this.rate.loadJS(data.rate);
            this.discount(data.discount);
            this.amortization(data.amortization);
            this.startDate(data.startDate === null ? null : new Date(data.startDate))
        }
    };
    Mortgage.fromJS = function(data) {
        var ret = new Mortgage;
        ret.loadJS(data);
        return ret
    };
    rh.Mortgage = Mortgage;
    var mortgageDefaults = {
        principal: null,
        originalPrincipal: null,
        payment: null,
        payFrequency: "monthly",
        amortization: 30,
        startDate: new Date(curDate.getFullYear() - 3, curDate.getMonth(), curDate.getDate()),
        discount: null
    };
    rh.Mortgage.create = function(init) {
        var ret =
            Object.create(Mortgage.prototype);
        var defaults = $.extend({}, mortgageDefaults, init);
        defaults.startDate = defaults.startDate instanceof Date ? defaults.startDate : new Date(defaults.startDate);
        ret.principal = ko.observable(defaults.principal);
        ret.originalPrincipal = ko.observable(defaults.originalPrincipal);
        ret.payment = ko.observable(defaults.payment);
        ret.payFrequency = ko.payFrequencyObservable();
        ret.payFrequency.val(defaults.payFrequency);
        ret.rate = rh.Rate.fromJS(init && init.rate ? init.rate : null);
        ret.amortization =
            ko.observable(defaults.amortization);
        ret.startDate = ko.observable(defaults.startDate);
        ret.discount = ko.observable(defaults.discount);
        ret.originalRates = ko.observable();
        ret.originalRates.loading = ko.observable(false);
        ret.bocOriginalRates = ko.observable();
        ret.bocOriginalRates.loading = ko.observable(false);
        createComputedProperties.call(ret);
        return ret
    };
    rh.Mortgage.createRefinance = function(init) {
        var ret = Object.create(Mortgage.prototype);
        var defaults = $.extend({}, mortgageDefaults, init);
        ret.principal = ko.observable(defaults.principal);
        ret.originalPrincipal = ret.principal;
        ret.payFrequency = ko.payFrequencyObservable();
        ret.payFrequency.val(defaults.payFrequency);
        var rate = null;
        if (init && init.rate && init.rate.timestamp) {
            var diff = (new Date).getTime() - init.rate.timestamp;
            var dayLength = 1E3 * 60 * 60 * 24;
            if (diff < dayLength) rate = init.rate
        }
        ret.rate = rh.Rate.fromJS(rate);
        ret.amortization = ko.observable(defaults.amortization);
        ret.startDate = ko.observable(curDate);
        ret.payment = ko.computed(function() {
            return rh.estimatePayment(ret)
        });
        ret.discount = ko.observable(defaults.discount);
        ret.originalRates = ko.observable();
        ret.originalRates.loading = ko.observable(false);
        ret.bocOriginalRates = ko.observable();
        ret.bocOriginalRates.loading = ko.observable(false);
        createComputedProperties.call(ret);
        return ret
    };
    rh.endDate = function(mortgage) {
        var start = rh.unwrap(mortgage.startDate);
        var term = rh.unwrap(mortgage.rate.term);
        if (rh.isAnyNull(start, term)) return null;
        return new Date(start.getFullYear() + term, start.getMonth(), start.getDate())
    };
    rh.yearsRemainingInTerm = function(mortgage) {
        var end = rh.endDate(mortgage);
        if (end === null) return null;
        return (end - curDate) / 1E3 / 60 / 60 / 24 / 365.25
    };
    rh.yearsRemainingInAmortization = function(mortgage) {
        var payments = rh.paymentsRemaining(mortgage);
        if (rh.isAnyNull(payments)) return null;
        var freq = rh.unwrap(mortgage.payFrequency);
        return payments / freq
    };
    rh.isTermCompleted = function(mortgage) {
        var end = rh.endDate(mortgage);
        if (end === null) return null;
        return end < curDate
    };
    rh.interestAtDate = function(mortgage, date) {
        var amortPaymentsRemaining = rh.paymentsRemaining(mortgage);
        var payment = rh.unwrap(mortgage.payment);
        var principal = rh.unwrap(mortgage.principal);
        var rate = rh.unwrap(mortgage.rate.value);
        var payFrequency = rh.unwrap(mortgage.payFrequency);
        if (rh.isAnyNull(amortPaymentsRemaining, payment, principal, rate, payFrequency)) return null;
        if (rh.isTermCompleted(mortgage)) return null;
        var amortYears = amortPaymentsRemaining / payFrequency;
        var termYears = (date - curDate) / 1E3 / 60 / 60 / 24 / 365.25;
        var years = Math.min(termYears, amortYears);
        var principalAtEnd = remaining_mortgage_balance(principal, rate, payment, payFrequency, years);
        var principalPaid =
            principal - principalAtEnd;
        var totalPaid = years * payFrequency * payment;
        return totalPaid - principalPaid
    };
    rh.estimatePayment = function(mortgage) {
        var principal = rh.unwrap(mortgage.originalPrincipal);
        var rate = rh.unwrap(mortgage.rate.value);
        var amort = rh.unwrap(mortgage.amortization);
        var freq = rh.unwrap(mortgage.payFrequency);
        if (rh.isAnyNull(principal, rate, amort, freq)) return null;
        return can_mortgage_payment(principal, rate, amort, freq, 1)
    };
    rh.principalAtDate = function(mortgage, date) {
        var startDate = rh.unwrap(mortgage.startDate);
        var originalPrincipal = rh.unwrap(mortgage.originalPrincipal);
        var rate = rh.unwrap(mortgage.rate.value);
        var payment = rh.unwrap(mortgage.payment);
        var freq = rh.unwrap(mortgage.payFrequency);
        if (rh.isAnyNull(startDate, originalPrincipal, rate, payment, freq)) return null;
        var years = (date - startDate) / 1E3 / 60 / 60 / 24 / 365.25;
        if (years <= 0) return originalPrincipal;
        var ret = remaining_mortgage_balance(originalPrincipal, rate, payment, freq, years);
        return Math.max(0, ret)
    };
    rh.monthlyPayment = function(mortgage) {
        var freq = rh.unwrap(mortgage.payFrequency);
        var payment = rh.unwrap(mortgage.payment);
        if (rh.isAnyNull(freq, payment)) return null;
        return payment * freq / 12
    }
})(window.rh, jQuery);
(function(rh, $) {
    function DebtItem(initial) {
        var defaults = {
            type: "other",
            principal: null,
            rate: {
                value: null
            },
            payment: null
        };
        initial = $.extend({}, defaults, initial);
        this.type = ko.observable(initial.type);
        this.principal = ko.observable(initial.principal);
        this.rate = {
            value: ko.observable(initial.rate.value)
        };
        this.payment = ko.observable(initial.payment);
        this.payFrequency = 12
    }

    function DebtTable() {
        var self = this;
        this.debts = ko.observableArray([new DebtItem({
            type: "credit_card"
        }), new DebtItem({
            type: "car"
        }), new DebtItem({
            type: "loc"
        })]);
        this.removeDebt = function() {
            self.debts.remove(this)
        };
        this.addDebt = function() {
            var d = new DebtItem;
            self.debts.push(d)
        };
        this.totals = ko.computed(function() {
            var debt = 0;
            var payment = 0;
            $.each(self.debts(), function(index, debtItem) {
                var amount = debtItem.principal();
                var pay = debtItem.payment();
                if (amount) debt += amount;
                if (pay) payment += pay
            });
            return {
                debt: debt,
                payment: payment
            }
        });
        this.totalPayment = ko.computed(function() {
            return self.totals().payment
        });
        this.totalDebt = ko.computed(function() {
            return self.totals().debt
        })
    }
    DebtTable.prototype.loadJS =
        function(data) {
            if (data) {
                var self = this;
                this.debts.removeAll();
                $.each(data, function(index, item) {
                    self.debts.push(new DebtItem(item))
                })
            }
        };
    DebtTable.prototype.toJS = function() {
        var self = this;
        var ret = [];
        $.each(this.debts(), function(index, item) {
            item = ko.toJS(item);
            if (item.principal || item.payment || item.rate) ret.push(item)
        });
        return ret.length ? ret : null
    };
    DebtTable.prototype.afterAddCallback = function(elem) {
        if (elem.nodeType == 1) {
            $(".chosen", elem).chosen({
                disable_search: true
            });
            $(elem).hide().fadeIn()
        }
    };
    DebtTable.prototype.beforeRemoveCallback =
        function(elem) {
            if (elem.nodeType == 1) $(elem).fadeOut("fast", function() {
                $(elem).remove()
            })
        };
    DebtTable.prototype.init = function(sel, type) {
        var elem = $(sel).get(0);
        this.elem = elem;
        ko.applyBindings(this, elem);
        $(".chosen", elem).chosen({
            disable_search: true
        })
    };
    rh.DebtTable = DebtTable;
    rh.weightedInterest = function(debts) {
        debts = rh.unwrap(debts);
        if (debts === null) return null;
        var sum = 0;
        var interest = 0;
        $.each(debts, function(index, item) {
            var amount = rh.unwrap(item.principal);
            var rate = rh.unwrap(item.rate.value);
            if (!rh.isAnyNull(amount,
                    rate)) {
                sum += amount;
                interest += rate * amount
            }
        });
        if (sum) return interest / sum;
        else return null
    };
    rh.debtSum = function(debts) {
        debts = rh.unwrap(debts);
        if (debts === null) return null;
        var sum = 0;
        $.each(debts, function(index, item) {
            var amount = rh.unwrap(item.principal);
            if (amount !== null) sum += amount
        });
        return sum
    };
    rh.paymentSum = function(debts) {
        debts = rh.unwrap(debts);
        if (debts === null) return null;
        var sum = 0;
        $.each(debts, function(index, item) {
            var amount = rh.unwrap(item.payment);
            if (amount !== null) sum += amount
        });
        return sum
    };
    rh.compoundingFrequency =
        function(debt) {
            if (typeof debt.type == "undefined") return 2;
            var d = rh.unwrap(debt.type);
            if (d === null) return null;
            switch (d) {
                case "credit_card":
                    return 365;
                case "car":
                    return 12;
                case "loc":
                    return 12;
                case "mortgage":
                    return 2;
                default:
                    return 12
            }
        };
    rh.paymentsRemaining = function(debt) {
        var principal = rh.unwrap(debt.principal);
        var rate = rh.unwrap(debt.rate.value);
        var payment = rh.unwrap(debt.payment);
        var freq = rh.unwrap(debt.payFrequency);
        var compounding = rh.compoundingFrequency(debt);
        if (rh.isAnyNull(principal, rate, payment,
                freq, compounding)) return null;
        return debt_payments_remaining(principal, rate, compounding, payment, freq)
    };
    rh.highestPaybackPeriod = function(debts) {
        debts = rh.unwrap(debts);
        if (!debts) return null;
        var m = null;
        $.each(debts, function(index, debt) {
            var p = rh.yearsRemainingInAmortization(debt);
            if (m === null || p > m) m = p
        });
        return m
    }
})(window.rh, jQuery);
(function(rh) {
    function Rate() {
        var self = this;
        this.value = ko.observable(null);
        this.type = ko.observable("fixed");
        this.term = ko.observable(5);
        this.provider = ko.observable(null);
        this.province = ko.observable(null);
        this.providerLogo = ko.observable(null);
        this.timestamp = null;
        this.term.text = ko.computed(function() {
            if (self.term() == 1) return self.term() + " year";
            else if (self.term() > 1) return self.term() + " years";
            else return "-"
        });
        this.type.text = ko.computed(function() {
            if (self.type() == "fixed") return "Fixed Rate";
            else if (self.type() ==
                "variable") return "Variable Rate";
            else return "-"
        })
    }
    Rate.prototype.toJS = function() {
        return {
            value: this.value(),
            type: this.type(),
            term: this.term(),
            provider: this.provider(),
            providerLogo: this.providerLogo(),
            province: this.province(),
            timestamp: this.timestamp
        }
    };
    Rate.prototype.loadJS = function(data) {
        if (data) {
            this.value(data.value);
            this.type(data.type);
            this.term(data.term);
            this.provider(data.provider);
            this.providerLogo(data.providerLogo);
            this.province(data.province);
            this.timestamp = data.timestamp
        }
    };
    Rate.fromJS =
        function(data) {
            var ret = new rh.Rate;
            ret.loadJS(data);
            return ret
        };
    rh.Rate = Rate
})(window.rh);
(function(rh, $) {
    var profile = {};
    $(".debug-clear-storage").click(function() {
        $.jStorage.flush();
        alert("Local storage cleared. Refresh your browser to clear the form.")
    });
    ko.extenders.persist = function(target, key) {
        ko.computed(function() {
            return target()
        }).extend({
            throttle: 1E3
        }).subscribe(function(data) {
            $.jStorage.set(key, data)
        });
        return target
    };

    function persistJS(target, key) {
        ko.computed(function() {
            return target.toJS()
        }).extend({
            throttle: 1E3
        }).subscribe(function(data) {
            $.jStorage.set(key, data)
        })
    }
    profile.existingMortgage =
        rh.Mortgage.create($.jStorage.get("rh.mortgage", null));
    profile.newMortgage = rh.Mortgage.createRefinance($.jStorage.get("rh.newMortgage", null));
    profile.rateHref = ko.observable(profile.newMortgage.rate.value() ? $.jStorage.get("rh.rateHref", null) : null).extend({
        persist: "rh.rateHref"
    });
    profile.homeValue = ko.observable($.jStorage.get("rh.homeValue", null)).extend({
        persist: "rh.homeValue"
    });
    profile.penalty = ko.observable($.jStorage.get("rh.breakagePenalty", null)).extend({
        persist: "rh.breakagePenalty"
    });
    var type =
        parseUrlParams().refinanceType;
    profile.refinanceType = ko.observable(type ? type : $.jStorage.get("rh.refinanceType", "rate")).extend({
        persist: "rh.refinanceType"
    });
    persistJS(profile.existingMortgage, "rh.mortgage");
    persistJS(profile.newMortgage, "rh.newMortgage");
    rh.profile = profile
})(window.rh, jQuery);
(function(rh) {
    function Penalty(existingMortgage) {
        var self = this;
        var providersInfo = {
            "default": {
                variableOpenAfter: Number.MAX_VALUE,
                threeMonth: {
                    fixedUsePosted: false,
                    variableUsePrime: false,
                    variableUsePosted: false
                },
                ird: {
                    usePostedOriginal: true,
                    usePostedComparison: true,
                    comparisonMap: {
                        6: 0,
                        12: 18,
                        24: 30,
                        36: 42,
                        48: 54,
                        60: 72,
                        72: 0,
                        84: 102,
                        96: 0,
                        108: 0,
                        120: 120
                    },
                    comparisonOperator: "lt"
                }
            }
        };
        this.providerInfo = ko.observable(null);
        this.providerInfo.loading = ko.observable(false);
        ko.computed(function() {
            var provider = existingMortgage.rate.provider();
            if (provider) getProviderInfo(provider);
            else self.providerInfo(null)
        });
        this.notes = ko.computed(function() {
            var providerInfo = self.providerInfo();
            if (providerInfo) {
                var language = Globalize.culture().language;
                return providerInfo["notes_" + language] || providerInfo.notes
            }
        });
        this.threeMonth = {};
        this.ird = {};
        this.ird.usePostedOriginal = ko.computed(function() {
            var providerInfo = self.providerInfo();
            if (providerInfo) return providerInfo.ird.usePostedOriginal
        });
        this.ird.usePostedComparison = ko.computed(function() {
            var providerInfo =
                self.providerInfo();
            if (providerInfo) return providerInfo.ird.usePostedComparison
        });
        this.comparisonRates = ko.observable();
        this.comparisonRates.loading = ko.observable(false);
        ko.computed(function() {
            var provider = existingMortgage.rate.provider();
            if (provider) rh.getProviderRates(provider, new Date, self.comparisonRates)
        });
        this.bocComparisonRates = ko.observable();
        this.bocComparisonRates.loading = ko.observable(false);
        ko.computed(function() {
            rh.getProviderRates("boc", new Date, self.bocComparisonRates)
        });
        this.loading =
            ko.computed(function() {
                return self.providerInfo.loading() || self.comparisonRates.loading() || self.bocComparisonRates.loading()
            });
        this.ird.originalRateInfo = ko.computed(function() {
            var rateInfo = null;
            if (!self.ird.usePostedOriginal()) rateInfo = {
                rate: existingMortgage.rate.value(),
                descriptionKey: "calc-your-mortgage-rate"
            };
            else rateInfo = {
                rate: existingMortgage.posted(),
                descriptionKey: "calc-posted-rate-at-original-mortgage-date"
            };
            return rateInfo
        });
        this.ird.remainingMonths = ko.computed(function() {
            return existingMortgage.monthsRemaining()
        });
        this.ird.comparisonRateInfo = ko.computed(function() {
            var rateInfo = null;
            var providerInfo = self.providerInfo();
            if (!providerInfo) return;
            var termMap = providerInfo.ird.comparisonMap;
            var operator = providerInfo.ird.comparisonOperator;
            var remainingTerm = self.ird.remainingMonths();
            for (var term in termMap) {
                var termInfo = termMap[term];
                var threshold = null;
                if (typeof termInfo == "function") threshold = termInfo();
                else if ($.isPlainObject(termInfo)) threshold = termInfo.upTo;
                else threshold = termInfo;
                var applicableTerm = false;
                if (operator ==
                    "lte") applicableTerm = remainingTerm <= threshold;
                else applicableTerm = remainingTerm < threshold;
                if (threshold !== 0) {
                    if ($.isPlainObject(termInfo)) rateInfo = {
                        rate: termInfo.rate / 100,
                        descriptionKey: "calc-comparison-rate"
                    };
                    else {
                        rateInfo = rh.getProviderRateInfo(self.comparisonRates(), self.bocComparisonRates(), existingMortgage.rate.province(), term, self.ird.usePostedComparison());
                        if (rateInfo) rateInfo.descriptionKey = self.ird.usePostedComparison() ? "calc-posted-rate-for-remaining-term" : "calc-rate-for-remaining-term"
                    }
                    if (applicableTerm) break
                }
            }
            return rateInfo
        });
        this.threeMonth.fixedUsePosted = ko.computed(function() {
            var providerInfo = self.providerInfo();
            if (providerInfo) return providerInfo.threeMonth.fixedUsePosted
        });
        this.threeMonth.variableUsePrime = ko.computed(function() {
            var providerInfo = self.providerInfo();
            if (!providerInfo) return;
            var variableUsePrime = providerInfo.threeMonth.variableUsePrime;
            if (typeof variableUsePrime == "function") variableUsePrime = variableUsePrime();
            return variableUsePrime
        });
        this.threeMonth.variableUsePosted = ko.computed(function() {
            var providerInfo =
                self.providerInfo();
            if (providerInfo) return providerInfo.threeMonth.variableUsePosted
        });
        this.threeMonth.rateInfo = ko.computed(function() {
            var rateInfo = null;
            var rateType = existingMortgage.rate.type();
            if (rateType == "fixed" && self.threeMonth.fixedUsePosted()) {
                var termMonths = existingMortgage.rate.term() * 12;
                rateInfo = {
                    rate: existingMortgage.posted(),
                    descriptionKey: "calc-posted-rate-at-original-mortgage-date"
                }
            } else if (rateType == "variable" && self.threeMonth.variableUsePrime()) rateInfo = {
                rate: ratehub.primeRate / 100,
                descriptionKey: "calc-prime-rate"
            };
            else if (rateType == "variable" && self.threeMonth.variableUsePosted()) {
                var termMonths = self.threeMonth.variableUsePosted();
                var rateInfo = rh.getProviderRateInfo(self.comparisonRates(), self.bocComparisonRates(), existingMortgage.rate.province(), termMonths, true);
                if (rateInfo) {
                    var term = termMonths / 12;
                    rateInfo.description = Globalize.localize("calc-posted-rate-for-term", null, term)
                }
            } else rateInfo = {
                rate: existingMortgage.rate.value(),
                descriptionKey: "calc-your-mortgage-rate"
            };
            return rateInfo
        });
        this.ird.original = ko.computed(function() {
            var rate = self.ird.originalRateInfo();
            if (rate && rate.rate) return rate.rate
        });
        this.ird.comparison = ko.computed(function() {
            var rate = self.ird.comparisonRateInfo();
            if (rate && rate.rate) return rate.rate
        });
        this.ird.differential = ko.computed(function() {
            var original = self.ird.original();
            var comparison = self.ird.comparison();
            if (original === null || comparison === null) return null;
            return (original - comparison) / 12
        });
        this.ird.penalty = ko.computed(function() {
            return existingMortgage.principal() *
                self.ird.differential() * self.ird.remainingMonths()
        });
        this.postedRequired = ko.computed(function() {
            var required = self.ird.usePostedOriginal() || self.threeMonth.fixedUsePosted();
            return required
        });
        this.threeMonth.rate = ko.computed(function() {
            var rate = self.threeMonth.rateInfo();
            if (rate && rate.rate) return rate.rate
        });
        this.threeMonth.penalty = ko.computed(function() {
            var principal = existingMortgage.principal();
            if (principal === null) return null;
            var rate = self.threeMonth.rate();
            if (rate === null) return null;
            return get_3month_penalty(principal,
                rate)
        });
        this.discharge = ko.computed(function() {
            var discharge = null;
            var providerInfo = self.providerInfo();
            if (providerInfo && providerInfo.discharge) {
                discharge = providerInfo.discharge.standard || null;
                var province = existingMortgage.rate.province();
                if (province in providerInfo.discharge) discharge = providerInfo.discharge[province]
            }
            return discharge
        });
        this.type = ko.computed(function() {
            var providerInfo = self.providerInfo();
            if (self.loading() || !providerInfo) return null;
            var rateType = existingMortgage.rate.type();
            if (rateType ==
                null) return null;
            if (self.postedRequired() && !existingMortgage.posted()) return null;
            if (existingMortgage.termCompleted()) return null;
            var tm = self.threeMonth.penalty();
            if (isNaN(tm) || tm === null) return null;
            else if (rateType == "variable") {
                if (existingMortgage.monthsElapsed() >= providerInfo.variableOpenAfter) return "open";
                return "3month"
            }
            var ird = self.ird.penalty();
            if (isNaN(ird) || ird === null) return "3month";
            else if (existingMortgage.monthsElapsed() >= 60) return "3month";
            else if (tm > ird) return "3month";
            return "ird"
        }).extend({
            throttle: 1
        });
        this.breakage = ko.computed(function() {
            var type = self.type();
            if (type == "ird") return self.ird.penalty();
            else if (type == "3month") return self.threeMonth.penalty();
            else if (type == "open") return 0;
            else return null
        });
        this.total = ko.computed(function() {
            if (self.breakage() === null) return null;
            return self.breakage() + self.discharge()
        });

        function getProviderInfo(provider) {
            self.providerInfo.loading(true);
            var params = {
                provider: provider
            };
            var xhr = $.ajax("/api/penalty-info", {
                data: params
            });
            xhr.success(function(data, textStatus,
                jqXHR) {
                if (data) {
                    var customInfo = eval("(" + data + ")");
                    var providerInfo = $.extend(true, {}, providersInfo.default, customInfo);
                    self.providerInfo(providerInfo)
                } else self.providerInfo(null)
            }).always(function() {
                self.providerInfo.loading(false)
            })
        }
    }
    rh.Penalty = Penalty
})(window.rh, jQuery);
(function(rh, $) {
    function constructBreakagePenaltyCalc(profile, type) {
        var self = this;
        this.showDebug = ko.observable(false);
        this.isPaymentEstimated = ko.observable(false);
        this.isPrincipalEstimated = ko.observable(false);
        this.isPenaltyEstimated = ko.observable(false);
        this.isDiscountEstimated = ko.observable(false);
        this.penaltyObject = new rh.Penalty(this);
        this.penalty = this.penaltyObject.breakage;
        this.penalty.subscribeObservable(profile.penalty);
        this.startDay = ko.computed({
            read: function() {
                var d = self.startDate();
                return d ?
                    d.getDate() : null
            },
            write: function(newVal) {
                var d = self.startDate();
                if (d && d.getDate() != newVal) {
                    d.setDate(newVal);
                    self.startDate.valueHasMutated()
                }
            }
        });
        this.startMonth = ko.computed({
            read: function() {
                var d = self.startDate();
                return d ? d.getMonth() + 1 : null
            },
            write: function(newVal) {
                var d = self.startDate();
                if (d && d.getMonth() + 1 != newVal) {
                    d.setMonth(newVal - 1);
                    self.startDate.valueHasMutated()
                }
            }
        });
        this.startYear = ko.computed({
            read: function() {
                var d = self.startDate();
                return d ? d.getFullYear() : null
            },
            write: function(newVal) {
                var d =
                    self.startDate();
                if (d && d.getFullYear() != newVal) {
                    d.setFullYear(newVal);
                    self.startDate.valueHasMutated()
                }
            }
        });
        this.dayList = ko.computed(function() {
            var start = 1;
            var end = (new Date(self.startYear(), self.startMonth(), 0)).getDate();
            var ret = [];
            for (var i = start; i <= end; i++) ret.push(i);
            return ret
        });
        this.yearList = ko.computed(function() {
            var start = 2E3;
            var end = rh.curDate.getFullYear();
            var ret = [];
            for (var i = start; i <= end; i++) ret.push(i);
            return ret
        });
        this.isAnyEstimated = ko.computed(function() {
            return self.isPaymentEstimated() ||
                self.isPrincipalEstimated()
        });
        this.showAmortization = ko.computed(function() {
            return self.isPaymentEstimated()
        });
        this.estimatedPenalty = ko.computed(function() {
            return self.penaltyObject.breakage()
        });

        function updatePrincipal(newVal) {
            if (self.isPrincipalEstimated()) self.principal(newVal)
        }

        function updatePayment(newVal) {
            if (self.isPaymentEstimated()) self.payment(newVal)
        }

        function updateDiscount(newVal) {
            if (self.isDiscountEstimated()) self.discount(self.estimatedDiscount())
        }
        this.isPrincipalEstimated.subscribe(function() {
            updatePrincipal(self.estimatedPrincipal())
        });
        this.estimatedPrincipal.subscribe(updatePrincipal);
        this.isPaymentEstimated.subscribe(function() {
            updatePayment(self.estimatedPayment())
        });
        this.estimatedPayment.subscribe(updatePayment);
        this.isDiscountEstimated.subscribe(function() {
            updateDiscount(self.estimatedDiscount())
        });
        this.estimatedDiscount.subscribe(updateDiscount);
        this.showPenaltyCalculations = ko.observable(false);
        this.termSliderDragging = ko.observable(false);
        this.showCalculationsText = ko.computed(function() {
            self.penaltyObject.type();
            var ret = self.showPenaltyCalculations() ?
                Globalize.localize("hide-calculations") : Globalize.localize("show-calculations");
            return ret
        });
        this.init = function(sel, type) {
            var self = this;
            if (type == "BreakagePenaltyCalculator") {
                this.loadJS($.jStorage.get("rh.mortgage", null));
                ko.computed(function() {
                    return self.toJS()
                }).extend({
                    throttle: 1E3
                }).subscribe(function(data) {
                    $.jStorage.set("rh.mortgage", data)
                })
            }
            var elem = $(sel).get(0);
            ko.applyBindings(this, elem);

            function alertTermComplete() {
                alert(Globalize.localize("alert-term-complete"))
            }
            this.termCompleted.subscribe(function(newValue) {
                if (newValue &&
                    !self.termSliderDragging()) alertTermComplete();
                else;
            });
            this.termSliderDragging.subscribe(function(newVal) {
                if (!newVal && self.termCompleted()) alertTermComplete();
                else;
            });
            $(function() {
                $(".ratehub-calc-breakage-penalty .chosen").chosen({
                    disable_search: true
                });
                if (type == "BreakagePenaltyCalculator") $(".showHide", elem).click(function(event) {
                    event.preventDefault();
                    self.showPenaltyCalculations.toggle()
                });
                fdSlider.createSlider({
                    inp: $("#current_amortization", elem).get(0),
                    step: 5,
                    animation: "tween",
                    forceValue: false
                });
                fdSlider.createSlider({
                    inp: $("#current_term", elem).get(0),
                    step: 1,
                    animation: "tween"
                });
                fdSlider.bind("current_amortization", self.amortization.int());
                fdSlider.bind("current_term", self.rate.term.int(), null, null, self.termSliderDragging)
            })
        };
        return this
    }
    rh.BreakagePenaltyCalculator = function(profile, type) {
        var ret = Object.create(profile.existingMortgage);
        constructBreakagePenaltyCalc.call(ret, profile, type);
        return ret
    }
})(window.rh, jQuery);
(function(rh, $) {
    function MaxRefinanceCalculator(profile, type) {
        var self = this;
        this.showDebug = ko.observable(false);
        this.homeValue = profile.homeValue;
        this.principal = profile.existingMortgage.principal;
        if (profile.existingMortgage.principal() && profile.newMortgage.principal()) this.equityWithdrawn = ko.observable(profile.newMortgage.principal() - profile.existingMortgage.principal());
        else this.equityWithdrawn = ko.observable(0);
        this.debtConsolidation = ko.observable(0);
        this.refinanceType = profile.refinanceType;
        this.showEquitySlider =
            ko.computed(function() {
                return type == "DebtConsolidation" || self.refinanceType() != "rate"
            });
        this.newPrincipal = ko.computed(function() {
            var principal = self.principal();
            var equityWithdrawn = self.equityWithdrawn();
            if (rh.isAnyNull(principal, equityWithdrawn)) return null;
            if (self.showEquitySlider()) return principal + equityWithdrawn;
            else return principal
        });
        this.availableEquity = ko.computed(function() {
            var principal = self.principal();
            var homeValue = self.homeValue();
            if (rh.isAnyNull(principal, homeValue)) return null;
            return available_equity(homeValue,
                principal)
        });
        this.loanToValue = ko.computed(function() {
            var loan = self.newPrincipal();
            var value = self.homeValue();
            if (rh.isAnyNull(loan, value)) return null;
            if (value === 0) return Infinity;
            return loan / value
        });
        this.cantRefinance = ko.computed(function() {
            var ltv = self.loanToValue();
            return ltv !== null && ltv > 0.8
        });
        this.showAvailableEquity = ko.computed(function() {
            return self.showEquitySlider() || self.availableEquity() !== null && type == "MaxRefinance"
        });
        this.showNewMortgage = ko.computed(function() {
            if (rh.isAnyNull(self.principal())) return false;
            return self.showEquitySlider()
        });
        var prevAvailableEquity = self.availableEquity();
        this.availableEquity.subscribe(function(newVal) {
            var v = newVal && newVal > 0 ? newVal : 0;
            if (self.equityWithdrawn() > v) self.equityWithdrawn(v);
            else if (type == "DebtConsolidation" && prevAvailableEquity === null && newVal !== null) {
                var debt = self.debtConsolidation();
                self.equityWithdrawn(Math.min(debt ? debt : 0, v))
            }
            prevAvailableEquity = newVal
        });
        this.homeValue.subscribeObservable(profile.homeValue)
    }
    MaxRefinanceCalculator.prototype.init = function(sel,
        type) {
        var self = this;
        var elem = $(sel).get(0);
        $(function() {
            if (Modernizr.boxshadow) {
                fdSlider.createSlider({
                    inp: $("#equity-withdrawn", elem).get(0),
                    step: 5E3,
                    animation: "tween",
                    forceValue: true,
                    ariaFormat: function(val) {
                        return Globalize.format(parseInt(val, 10), "c0")
                    }
                });
                fdSlider.bind("equity-withdrawn", self.equityWithdrawn.int(), 0, self.availableEquity.int())
            } else {
                $("#equity-withdrawn", elem).attr("data-bind", "value: ieWithdrawnEquityFill.currency(), " + "enable: availableEquity() && !cantRefinance()");
                self.ieWithdrawnEquityFill =
                    ko.computed({
                        read: self.equityWithdrawn,
                        write: function(newVal) {
                            if (newVal !== null) {
                                var availableEquity = self.availableEquity();
                                newVal = Math.max(0, Math.min(newVal, availableEquity));
                                self.equityWithdrawn(newVal)
                            } else self.equityWithdrawn(0)
                        }
                    })
            }
            ko.applyBindings(self, elem)
        })
    };
    rh.MaxRefinanceCalculator = MaxRefinanceCalculator
})(window.rh, jQuery);
(function(rh, $) {
    function PickRate(profile, type) {
        var self = this;
        this.showDebug = ko.observable(false);
        this.mortgage = profile.newMortgage;
        this.rate = this.mortgage.rate;
        this.rateChosen = ko.computed(function() {
            return self.rate.value() !== null
        });
        this.showPayment = ko.observable(false);
        this.rateHref = profile.rateHref
    }
    PickRate.prototype.setColorboxRate = function(rate) {
        this.rate.value(rate.value / 100);
        if (rate.provider) {
            this.rateHref(rate.href);
            this.rate.term(rate.term);
            this.rate.provider(rate.provider.name);
            this.rate.providerLogo(rate.provider.logo);
            this.rate.type(rate.type == 1 ? "fixed" : "variable");
            this.rate.timestamp = (new Date).getTime()
        } else {
            this.rate.term(null);
            this.rate.provider(null);
            this.rate.providerLogo(null);
            this.rate.type(null);
            this.rate.timestamp = null;
            this.rateHref(null)
        }
        this.rate.province($("#rs-province").val())
    };
    PickRate.prototype.init = function(sel) {
        var self = this;
        $(function() {
            var elem = $(sel).get(0);
            ko.applyBindings(self, $(sel).get(0));
            fdSlider.createSlider({
                inp: $("#new_amortization_period", elem).get(0),
                step: 5,
                animation: "tween",
                forceValue: false
            });
            fdSlider.bind("new_amortization_period", self.mortgage.amortization.int());
            $("#rate-selector").bind("rateSelected", function() {
                var rate = $.colorbox.result;
                if (rate) self.setColorboxRate(rate)
            })
        })
    };
    rh.PickRate = PickRate
})(window.rh, jQuery);
(function(rh, $) {
    var curDate = rh.curDate;

    function RefinanceResults(profile, type) {
        var self = this,
            existingMortgage = profile.existingMortgage,
            newMortgage = profile.newMortgage;
        this.showDebug = ko.observable(false);
        if (type == "DebtConsolidation") this.debts = profile.debts;
        else this.debts = ko.observableArray();
        this.hasEnoughEquity = ko.observable(true);
        this.refinanceReason = profile.refinanceType;
        this.existingAmount = ko.computed(function() {
            return existingMortgage.principal()
        });
        this.refinanceAmount = ko.computed(function() {
            return newMortgage.principal()
        });
        this.existingRate = ko.computed(function() {
            return existingMortgage.rate.value()
        });
        this.refinanceRate = ko.computed(function() {
            return newMortgage.rate.value()
        });
        this.existingPayment = ko.computed(function() {
            return rh.monthlyPayment(existingMortgage)
        });
        this.refinancePayment = ko.computed(function() {
            return rh.monthlyPayment(newMortgage)
        });
        this.penalty = ko.computed(function() {
            return profile.penalty()
        });
        var newMortgageAtExistingPrincipal = $.extend({}, newMortgage, {
            principal: existingMortgage.principal,
            originalPrincipal: existingMortgage.principal
        });
        this.existingTermInterest = ko.computed(function() {
            return rh.interestAtDate(existingMortgage, rh.endDate(existingMortgage))
        });
        this.refinanceTermInterest = ko.computed(function() {
            return rh.interestAtDate(newMortgageAtExistingPrincipal, rh.endDate(existingMortgage))
        });
        this.interestSavings = ko.computed(function() {
            var existingInterest = self.existingTermInterest();
            var refinanceInterest = self.refinanceTermInterest();
            if (rh.isAnyNull(existingInterest, refinanceInterest)) return null;
            return existingInterest - refinanceInterest
        });
        this.netSavings = ko.computed(function() {
            var savings = self.interestSavings();
            var penalty = self.penalty();
            if (rh.isAnyNull(savings, penalty)) return null;
            return savings - penalty
        });
        this.annualSavings = ko.computed(function() {
            var savings = self.netSavings();
            var termYears = rh.yearsRemainingInTerm(existingMortgage);
            var amortYears = rh.yearsRemainingInAmortization(existingMortgage);
            if (rh.isAnyNull(savings, termYears, amortYears)) return null;
            return savings / Math.min(termYears, amortYears)
        });
        this.availableEquity = ko.computed(function() {
            var homeValue =
                profile.homeValue();
            var principal = existingMortgage.principal();
            if (rh.isAnyNull(homeValue, principal)) return null;
            return available_equity(homeValue, principal)
        });
        this.existingMortgageDebt = existingMortgage.principal;
        this.refinanceMortgageDebt = newMortgage.principal;
        this.equityForConsolidation = ko.computed(function() {
            var newMortgage = self.refinanceMortgageDebt();
            var existingMortgage = self.existingMortgageDebt();
            if (rh.isAnyNull(newMortgage, existingMortgage)) return null;
            return Math.max(0, newMortgage - existingMortgage)
        });
        var debtsAfterConsolidation = ko.computed(function() {
            var debts = rh.unwrap(self.debts);
            var consolidationMoney = self.equityForConsolidation();
            if (rh.isAnyNull(debts, consolidationMoney)) return null;
            var ret = debts.slice(0);
            ret.sort(function(a, b) {
                return rh.unwrap(a.rate.value) - rh.unwrap(b.rate.value)
            });
            while (ret.length && consolidationMoney > 0) {
                var debt = ret.pop();
                var principal = rh.unwrap(debt.principal);
                if (rh.isAnyNull(principal, debt.rate.value)) continue;
                if (principal <= consolidationMoney) consolidationMoney -= principal;
                else {
                    var newPrincipal = principal - consolidationMoney;
                    var payment = rh.unwrap(debt.payment);
                    ret.push($.extend({}, debt, {
                        principal: newPrincipal,
                        payment: payment === null ? null : payment * newPrincipal / principal
                    }));
                    consolidationMoney = 0
                }
            }
            ret.push(newMortgage);
            return ret
        });
        this.afterConsolidation = debtsAfterConsolidation;
        this.existingDebt = ko.computed(function() {
            return rh.debtSum(self.debts)
        });
        this.refinanceDebt = ko.computed(function() {
            var mortgage = self.refinanceMortgageDebt();
            if (mortgage !== null) {
                var sum = rh.debtSum(debtsAfterConsolidation);
                if (sum !== null) return sum - mortgage
            }
            return null
        });
        this.existingTotalDebt = ko.computed(function() {
            var mortgage = self.existingMortgageDebt();
            var debt = self.existingDebt();
            if (rh.isAnyNull(debt, mortgage)) return null;
            return mortgage + debt
        });
        this.refinanceTotalDebt = ko.computed(function() {
            var mortgage = self.refinanceMortgageDebt();
            var debt = self.refinanceDebt();
            var penalty = self.penalty();
            if (rh.isAnyNull(mortgage, debt, penalty)) return null;
            return mortgage + debt + penalty
        });

        function formatYears() {
            var years = this();
            if (years ===
                Infinity) return "\u221e";
            else if (years === null) return "";
            else return formatNumberYears(Math.round(years))
        }
        this.existingPaybackPeriod = ko.computed(function() {
            var debts = self.debts();
            debts.push(existingMortgage);
            var ret = rh.highestPaybackPeriod(self.debts);
            debts.pop();
            return ret
        });
        this.refinancePaybackPeriod = ko.computed(function() {
            return rh.highestPaybackPeriod(debtsAfterConsolidation)
        });
        this.existingPaybackPeriod.text = formatYears;
        this.refinancePaybackPeriod.text = formatYears;
        this.existingWeightedRate = ko.computed(function() {
            var debts =
                self.debts();
            debts.push(existingMortgage);
            var ret = rh.weightedInterest(self.debts);
            debts.pop();
            return ret
        });
        this.refinanceWeightedRate = ko.computed(function() {
            return rh.weightedInterest(debtsAfterConsolidation)
        });
        this.existingDebtPayment = ko.computed(function() {
            var mortgagePayment = existingMortgage.payment();
            var debtPayment = rh.paymentSum(self.debts);
            if (rh.isAnyNull(mortgagePayment, debtPayment)) return null;
            return mortgagePayment + debtPayment
        });
        this.refinanceDebtPayment = ko.computed(function() {
            return rh.paymentSum(debtsAfterConsolidation)
        });
        this.refinanceForSavings = ko.computed(function() {
            return type == "DebtConsolidation" || self.refinanceReason() == "rate"
        });
        this.statusCode = ko.computed(function() {
            if (!self.hasEnoughEquity()) return "equity";
            if (type == "DebtConsolidation") {
                if (rh.isAnyNull(self.refinanceTotalDebt(), self.existingTotalDebt())) return "info";
                return "yes"
            }
            var savings = self.netSavings();
            if (savings === null) return "info";
            else if (savings <= 0 && self.refinanceForSavings()) return "penalty";
            else return "yes"
        });
        this.srcUrl = ko.computed(function() {
            var language =
                Globalize.culture().language;
            if (self.statusCode() == "yes") return language == "fr" ? "images/sticker_oui.png" : "images/sticker_yes.png";
            else if (self.statusCode() == "info") return "images/sticker_unknown.png";
            else return language == "fr" ? "images/sticker_non.png" : "images/sticker_no.png"
        });
        this.yesMsg = ko.computed(function() {
            if (type == "DebtConsolidation") return "consolidate";
            if (self.refinanceForSavings()) return "rate";
            return "equity"
        });
        this.showResults = ko.computed(function() {
            return self.statusCode() in {
                "penalty": 1,
                "yes": 1
            }
        });
        this.canRefinance = ko.computed(function() {
            return self.statusCode() == "yes"
        });
        this.showSavingsCTA = ko.computed(function() {
            return self.statusCode() == "yes" && type != "DebtConsolidation" && self.refinanceReason() == "rate"
        });
        this.showEquityCTA = ko.computed(function() {
            return self.statusCode() == "yes" && (type == "DebtConsolidation" || self.refinanceReason() != "rate")
        });
        this.showCTA = ko.computed(function() {
            return self.showSavingsCTA() || self.showEquityCTA()
        });
        this.showSavingsSection = ko.computed(function() {
            if (type == "DebtConsolidation") return false;
            return self.refinanceReason() == "rate"
        });
        $(function() {
            self.rateHref = ko.computed(function() {
                var base = window.ratehub.serverUri;
                var href = profile.rateHref() || window.ratehub.bestFiveYearFixedURL;
                return base + href + "?popup=popup"
            })
        })
    }
    RefinanceResults.prototype.init = function(sel, type) {
        var elem = $(sel).get(0);
        var self = this;
        $(function() {
            ko.applyBindings(self, elem);
            var buttonSel = $("a.greenButton.popup", elem);

            function retachDialog(href) {
                detachRateDetailsDialog(buttonSel, false);
                attachRateDetailsDialog(buttonSel,
                    href)
            }
            self.rateHref.subscribe(retachDialog);
            retachDialog(self.rateHref())
        })
    };
    RefinanceResults.create = function(profile, type) {
        return new RefinanceResults(profile, type)
    };
    rh.RefinanceResults = RefinanceResults
})(window.rh, jQuery);
(function(rh, $) {
    function RefinanceLowerRate(profile, type) {
        var self = this;
        this.maxRefinance = new rh.MaxRefinanceCalculator(profile, type);
        this.maxRefinance.newPrincipal.subscribe(function(newVal) {
            profile.newMortgage.principal(newVal)
        });
        if (type == "DebtConsolidation") {
            this.debtTable = new rh.DebtTable;
            this.debtTable.loadJS($.jStorage.get("rh.debts", null));
            this.debtTableJS = ko.computed(this.debtTable.toJS, this.debtTable).extend({
                throttle: 1E3
            }).subscribe(function(data) {
                $.jStorage.set("rh.debts", data)
            });
            profile.debts =
                this.debtTable.debts;
            this.debtTable.totalDebt.subscribeObservableAndCall(this.maxRefinance.debtConsolidation)
        } else this.debtTable = null;
        this.maxRefinance.newPrincipal.subscribeObservable(profile.newMortgage.principal);
        this.breakagePenalty = new rh.BreakagePenaltyCalculator(profile, type);
        this.penalty = this.breakagePenalty.penaltyObject;
        this.pickRate = new rh.PickRate(profile, type);
        this.results = new rh.RefinanceResults(profile, type);
        this.maxRefinance.cantRefinance.subscribeAndCall(function(newVal) {
            self.results.hasEnoughEquity(!newVal)
        })
    }
    RefinanceLowerRate.prototype.init = function(sel, type, params) {
        var self = this;
        var elem = $(sel).get(0);
        if (type == "DebtConsolidation") this.debtTable.init($(params.debtTable, elem), "DebtConsolidation");
        this.breakagePenalty.init($(params.breakage, elem), "RefinanceLowerRates");
        this.pickRate.init($(params.pickRate, elem), "RefinanceLowerRates");
        this.maxRefinance.init($(params.maxRefinance, elem), "RefinanceLowerRates");
        this.results.init($(params.results, elem), "RefinanceLowerRates")
    };
    rh["RefinanceLowerRate"] = RefinanceLowerRate;
    $(function() {
        $(".ratehub-calc-refinance.calc-standalone").each(function() {
            var calc = new rh.RefinanceLowerRate(rh.profile, "RefinanceLowerRates");
            calc.init(this, "RefinanceLowerRates", {
                "breakage": ".ratehub-calc-breakage-penalty",
                "pickRate": ".ratehub-calc-pick-rate",
                "maxRefinance": ".ratehub-calc-max-refinance",
                "results": ".ratehub-calc-results"
            })
        });
        $(".ratehub-calc-max-refinance.calc-standalone").each(function() {
            var calc = new rh.MaxRefinanceCalculator(rh.profile, "MaxRefinance");
            calc.init(this, "MaxRefinance")
        });
        $(".ratehub-calc-breakage-penalty.calc-standalone").each(function() {
            var calc = new rh.BreakagePenaltyCalculator(rh.profile, "BreakagePenaltyCalculator");
            calc.init(this, "BreakagePenaltyCalculator")
        });
        $(".ratehub-calc-debt-consolidation.calc-standalone").each(function() {
            var calc = new rh.RefinanceLowerRate(rh.profile, "DebtConsolidation");
            calc.init(this, "DebtConsolidation", {
                "debtTable": ".ratehub-calc-debt-table",
                "breakage": ".ratehub-calc-breakage-penalty",
                "pickRate": ".ratehub-calc-pick-rate",
                "maxRefinance": ".ratehub-calc-max-refinance",
                "results": ".ratehub-calc-results"
            })
        })
    });
    if (document.all) $(".refi-calc input").keydown(function(event) {
        if (String.fromCharCode(event.which) == "\r") {
            event.preventDefault();
            $(event.target).change()
        }
    })
})(window.rh, jQuery);