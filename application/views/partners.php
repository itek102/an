			<div id='main-content'>
<h3 id='page-title'><?=$page['title']; ?></h3>
<?
$this->db->order_by('position','ASC');
$a = $this->db->get('bank');
foreach ($a->result() as $item) {
	echo "<div class='agent'><img class='part-img' src='".base_url()."images/bank/".$item->img."'></div>";
}
?>
<div id='razd-pol'></div>


<h3 class = 'agent-title'>Застройщики</h3>
<?
$this->db->order_by('position','ASC');
$a = $this->db->get('zastroi');
foreach ($a->result() as $item) {
	echo "<div class='agent'><img class='part-img' src='".base_url()."images/bank/".$item->img."'></div>";
}
?>
<div id='razd-pol'></div>

<?
$this->db->order_by('position','ASC');
$a = $this->db->get('other_partners');
foreach ($a->result() as $item) {
	echo "<fieldset class='field-partner'>
<legend>".$item->name."</legend>
<div class='text-part'>
".$item->text."
</div>
<a href='http://".$item->link."' target='_blank'>".$item->link."</a>
</fieldset>";
}
?>

<div style='clear: both'></div>

			</div>