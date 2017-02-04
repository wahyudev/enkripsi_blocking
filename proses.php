<?php

function jadikarakter($kata)
{
	$p=str_split($kata);
	return $p;
}
function jumlahblok($teks)
{
	$p=strlen($teks);
	if($p<=10)
	{
		$jumlah_blok=3;
	}
	else if ($p > 10 && $p <= 20) {
		 
		 $jumlah_blok=6;
	}
	else if($p>20 &&$p <= 100)
	{
		 $jumlah_blok=10;
	}
	else if($p>100 &&$p<=200)
	{
		 $jumlah_blok=20;
	}
	else if($p>200 &&$p<=400)
	{
		 $jumlah_blok=50;
	}
	else
	{
		$jumlah_blok=100;
	}
	return $jumlah_blok;
}
function cek_kosong($a)
{
	if($a=="")
	{
		return "-";
	}
	else
	{
		return $a;
	}
}
function tx_encrypt($teks)
{
	
	$data=kelompokencrypt($teks);
	$count=count($data);
	$l=count($data)-1;

	for($i=$count-1;$i >-1;$i--)
	{ 
	
		if(count($data[$i])<count($data[$l]))
		{
			$count2=count($data[$i])+1;
		}
		else
		{
			$count2=count($data[$i]);
		}
		
		for ($j=0; $j < $count2; $j++) 
		{

			$ujang.=cek_kosong($data[$i][$j]);

		}
	}
	return $ujang;

}
function kelompokencrypt($teks)
{
	$array=jadikarakter($teks);
	$p=strlen($teks);
	$jumlah_blok=jumlahblok($teks);
	
	$result=array_fill(0, $jumlah_blok, array());
	for($i=0;$i<$p;){
	$j = $jumlah_blok;
		while(--$j > -1){
		if(isset($array[$i]))$result[$j][] = $array[$i];
		++$i;
		}
	} 
	return $result;
}
function decrypt($teks)
{
	$array=jadikarakter($teks);
	$p=strlen($teks);
	$pola=ceil($p/jumlahblok($teks));
	$in=0;
	$c=0;
	for($i=0;$i<$pola;$i++)
	{
		
		for($j=0;$j<jumlahblok($teks);$j++)
		{
			$a[$i][$j]=$array[$in];
			$in+=$pola;
		}
		$c++;
		$in=$c;	
	}
	return $a;
}
function susun($teks)
{
	$data=decrypt($teks);
	$h=count($data);
	for ($i=0; $i <$h ; $i++) { 
		$a[$i]=implode("",$data[$i]);
	}
	$p=implode("",$a);
	return str_replace("-","",$p) ;
}




