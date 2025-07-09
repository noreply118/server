<style>
    /* Circle */
.hover15 figure {
	position: relative;
}
.hover15 figure::before {
	position: absolute;
	top: 50%;
	left: 50%;
	z-index: 2;
	display: block;
	content: '';
	width: 0;
	height: 0;
	background: rgba(0,255,255,.1);
	border-radius: 100%;
	-webkit-transform: translate(-50%, -50%);
	transform: translate(-50%, -50%);
	opacity: 0;
}
.hover15 figure:hover::before {
	-webkit-animation: circle .75s;
	animation: circle .75s;
}
@-webkit-keyframes circle {
	0% {
		opacity: 1;
	}
	40% {
		opacity: 1;
	}
	100% {
		width: 200%;
		height: 200%;
		opacity: 0;
	}
}
@keyframes circle {
	0% {
		opacity: 1;
	}
	40% {
		opacity: 1;
	}
	100% {
		width: 200%;
		height: 200%;
		opacity: 0;
	}
}
</style>
<?php
require('config.php');

if($_POST['data'] == 'dropdownRate')
{
$blog_sql=mysqli_query($conn,"SELECT DISTINCT Rate FROM `morgagerate`");
$option.='<option value="">Select</option>';

while($row_blog=mysqli_fetch_assoc($blog_sql))
{ 

$option.='<option value="'.$row_blog['Rate'].'">'.$row_blog['Rate'].'</option>';

}
echo $option;
die;
}elseif($_POST['data'] == 'dropdownType')
{
    $blog_sql=mysqli_query($conn,"SELECT DISTINCT Type FROM `morgagerate`");
    $option.='<option value="">Select</option>';

    while($row_blog=mysqli_fetch_assoc($blog_sql))
    { 
        $option.='<option value="'.$row_blog['Type'].'">'.$row_blog['Type'].'</option>';
        
    }
    echo $option;
die;
}elseif($_POST['data'] == 'dropdownTerm')
{
    $blog_sql=mysqli_query($conn,"SELECT DISTINCT Term FROM `morgagerate`");
    $option.='<option value="">Select</option>';

    while($row_blog=mysqli_fetch_assoc($blog_sql))
    { 
        $option.='<option value="'.$row_blog['Term'].'">'.$row_blog['Term'].'</option>';
        
    
        
    }
    echo $option;
die;
}

elseif($_POST['data'] == 'dropdownProvider')
{
    $blog_sql=mysqli_query($conn,"SELECT DISTINCT Provider FROM `morgagerate`");
    $option.='<option value="">Select</option>';

    while($row_blog=mysqli_fetch_assoc($blog_sql))
    { 
        
        $option.='<option value="'.$row_blog['Provider'].'">'.$row_blog['Provider'].'</option>';
        
    }
echo $option;
die;
}elseif($_POST['data'] == 'table')
{
if($_POST['dropdownRate']!=''):
    $dropdown.='AND Rate="'.$_POST['dropdownRate'].'"';
endif;
if($_POST['dropdownTerm']!=''):
    $dropdown.='AND Term="'.$_POST['dropdownTerm'].'"';
endif;
if($_POST['dropdownType']!=''):
    $dropdown.='AND Type="'.$_POST['dropdownType'].'"';
endif;
if($_POST['dropdownProvider']!=''):
    $dropdown.='AND Provider="'.$_POST['dropdownProvider'].'"';
endif;
if($_POST['pagenavi']!= '')
{
  $nomofrows=$_POST['pagenavi'];  
}
else
{
  $nomofrows='10';
  $sid = '  sid ASC,';
}
// die("SELECT * FROM `morgagerate` where id!='' {$dropdown} ORDER {$sid} CAST(Rate AS DECIMAL(10, 2)) ASC limit {$nomofrows}");
//   $blog_sql=mysqli_query($conn,"SELECT  * FROM `morgagerate` Where id!='' {$dropdown} ORDER by sid ASC limit {$nomofrows}");
  $blog_sql =mysqli_query($conn , "SELECT * FROM `morgagerate` where id!='' {$dropdown} ORDER BY {$sid} CAST(Rate AS DECIMAL(10, 2)) ASC limit {$nomofrows}");
  $option.='<table id="example" align="left" cellspacing="0" cellpadding="0" class="table-rates fixed"><thead><tr><th scope="col">Rate</th><th scope="col" align="center">Term</th><th scope="col" align="center">Type</th><th scope="col" align="center"></th><th scope="col" align="center">Provider</th><th scope="col" align="center">&nbsp;</th></tr></thead>';
  $option.='<tbody>';
  if(mysqli_num_rows($blog_sql)>0):
    while($row_blog=mysqli_fetch_assoc($blog_sql))
    { 
         $bank_logo=mysqli_fetch_assoc(mysqli_query($conn ,"SELECT bank_logo FROM `bank_logo_list` WHERE Provider= '".$row_blog['Provider']."'"));
         $option.='<tr>';
         $option.='<td><span class="rt-rate">'.$row_blog['Rate'].'<sup>%</sup></span></td> ';
         $option.='<td><span class="terms">'.$row_blog['Term'].'</span></td> ';
         $option.='<td><span class="type">'.$row_blog['Type'].'</span></td> ';
         $option.='<td><span class="type"><div class="hover15 column"><div><figure><img src ="https://www.ratetrade.ca/symfonyratetrade/web/bundles/assets/php/bank-logo/'.$bank_logo['bank_logo'].'?format=webg" class="bank-logo" loading="lazy" width="40;" height="40" alt ="'.$row_blog['Provider'].'" style="width: 40px;"></figure></div></div></span></td> ';
         $option.='<td><span style="font-size: 16px;background: #fbfbfb;color: #001;font-weight: 400;">'.$row_blog['Provider'].'</span></td> ';
         $option.='<td><span class="get_this-rate"><a href="https://www.ratetrade.ca/apply-now?rate='.$row_blog['Rate'].'"class="rate-btn'.$row_blog['Rate'].'"><span class="wide"><button class="btn btn-success rh-button">Apply Now</button></a></span></td> ';
         $option.='</tr>';
        
        
    }
else:
     $option.='<tr><td colspan="9"><div class="alert alert-info text-center"><i class="fa fa-info-circle"></i> No  Found </div></td></tr>'; 
    
endif;    
    $option.='</tbody>';
    $option.='</table>';
}
    
    // $total_pages = ceil(mysqli_num_rows(mysqli_query($conn, "SELECT * FROM `morgagerate`")) / $perPage);
    // $optionl.='<div class="pagination-wrapper">';
    // $optionl.='<ul class="pagination">';
    // if($page > 1)
    // { <sup><img src ="https://www.ratetrade.ca/symfonyratetrade/web/bundles/assets/php/bank-logo/canadian-lender.webp" style="width: 40px;"></sup>
    // $optionl.='<li><a href="'.($page - 1).'"> Previous</a></li>';
    // }
    // for ($i = 1; $i <= $total_pages; $i++) {
    //  if($i==$page){   $active_class ='active'; $class='(current)'; } else{ $active_class=''; $class='';}
    //   $optionl.='<li class="'.$active_class.'"><a href="'.$i.'">'.$i.'<span class="sr-only"></span></a>'.$class.'</li>'; 
    //  }
    // if($page < $total_pages)
    // {
    // $optionl.='<li><a class="next" href="'.($page + 1).'">Next</a></li>';
    // }
    // $optionl.='</div>';
  
    // $html.='</ul>'; 
    // $result_html = array(
    // 'table' => $option,
    //  'pagination' => $html
    // );  style="width: 40px;"


echo $option;
die;

?>     
