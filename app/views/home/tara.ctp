<style>img{padding-top:10px;padding-bottom:10px;padding-right:10px;}p{padding:5px 0px 5px 0px;margin:0px;}
.doc_country {font-family: Arial; font-size: 9pt; font-weight: bold; text-decoration: underline;}
.tbd {font-family: Arial; font-size: 9pt; font-weight: bold;}
.n {font-family: Arial; font-size: 9pt;}
</style>

<div style="float:left;margin-left:5px;">
<h3>
<?php echo $html->link('Secţii', array('controller'=>'home','action' => 'tari') ) ?>
 &gt; <?php echo $title_for_layout ?></h3>
Mergi cu maşina dintr-un oraş fără secţie de votare şi ai locuri libere ?<br>
Pune un <a href="">anunţ</a> şi mai ea pe cineva din ai noştri la secţie, împreună e mai vesel !</br>
</div>
<div style="clear:both"></div>
<br>
<div style="font-family: Arial; font-size: 9pt;">
<?php echo $tara_info ?>
</div>
<a name="anunt"></a>
<h2>Crează un anunţ</h2>
<br>
Tara: Asta aleasa<br>
Oras: Scrie orice<br>
Nume:<br>
Mesaj de contact:<br>
<br>
toate mesajele vor fi sterse dupa data alegerilor.</br>

<?php echo $form->create('Book');?>
<?php echo $form->input('country',array('label'=>__('Titlul cărţii',true))); ?>
<?php echo $form->end(__('Submit',true));?>