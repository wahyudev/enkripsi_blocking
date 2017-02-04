function cekisi(isi)
{
	var nilai=isi;
	if(nilai!='')
		{
			$("#proses").removeAttr('disabled');
		}
		else{
			$("#proses").attr('disabled','');
		}
}
$(document).ready(function() {

	$("#tx_enkrip").focusin(function()
	{
		cekisi($(this).val());
		
	}).blur(function(){
		cekisi($(this).val());
	}).keyup(function(){
		cekisi($(this).val());
	}).mouseout(function(){
		cekisi($(this).val());
	});

	$("#tx_dekrip").focusin(function()
	{
		cekisi($(this).val());
		
	}).blur(function(){
		cekisi($(this).val());
	}).keyup(function(){
		cekisi($(this).val());
	}).mouseout(function(){
		cekisi($(this).val());
	});
	
});