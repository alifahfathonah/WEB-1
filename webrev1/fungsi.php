<?php
function UPDATE($table, $value, $key_id, $id){
	$fild = "";
	$val = "";
	$i = 0;
	foreach($value as $key => $value){
		if ($i < 1){
			$koma = "";
		} else {
			$koma = ", ";
		}
		$fild .= $koma . $key . " = '".$this->con->real_escape_string($value)."'";
		$i++;
	}
	$field = ("UPDATE {$table} SET {$fild} WHERE {$key_id} = '{$id}'");
	$this->result = $this->con->query($field);

	return $this->result;
}
?>