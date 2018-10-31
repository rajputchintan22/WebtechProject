<?php
	$body="Query:";
	$body.=$_POST['message'];
	$body.="\n\n\n";
	$body.="From:";
	$body.=$_POST['name'];
	$body.="\n";
	$body.="Email:";
	$body.=$_POST['email'];
	$sub=$_POST['subject'];
	$a=mail('chintanrajput22@outlook.com',$sub,$body);
	if($a)
	{
		echo ("<script LANGUAGE='JavaScript'>
		    alert('Your Query has been send!We will get back to you within 24 Hours....:)');
		    window.location.href='index.php';
		    </script>");
	}
	else
	{
		echo ("<script LANGUAGE='JavaScript'>
	    alert('Fail to Send Query :(');
	    window.location.href='index.php';
	    </script>");
	}
?>