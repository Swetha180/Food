<?php

public function pasta_count(){
$plikes=0;
$pdislikes=0;
$query=$this->db->query("select PastaValues from foodtable");
			$row = $query->num_rows();
			if($row){
                    $row = $query->row();
					$countype=$row->UserType;
				        if($countype==1)
						{
						$plikes=$plikes+1;
						echo "$likes";
						}
						else
						{
						$pdislikes=$pdislikes+1;
						echo "$dislikes";
						}
                    }
			        return $likes;
					return $dislikes;
					}
?>