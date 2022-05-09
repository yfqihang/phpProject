<?php
	class Page{
		private $total;
		private $listRows;
		private $limit;
		private $uri;
		private $pageNum;
		private $config=array('header'=>"条记录",'prev'=>"上一页",'next'=>"下一页","first"=>"首页","last"=>"尾页");
		
		private $listNum=5; 
		
		public function __construct($total,$listRows=10){
			$this->total=$total;
			$this->listRows=$listRows;
			$this->uri=$this->getUri();
			$this->page=!empty($_GET["page"])?$_GET["page"]:1;
			$this->pageNum=ceil($this->total/$this->listRows);
			$this->limit=$this->setLimit();
			
//			var_dump($this);
		}
		private function setLimit(){
			return "limit ".($this->page-1)*$this->listRows.",".$this->listRows;
		}
		private function getUri(){
			$url= $_SERVER["REQUEST_URI"].(strpos($_SERVER["REQUEST_URI"],'?')?'':"?");
			$parse = parse_url($url);
//			print_r($parse);
			if(isset($parse["query"])){
				parse_str($parse['query'],$params);
				unset($params["page"]);//删除路径中的page参数
				$url=$parse['path'].'?'.http_build_query($params);
//				print_r($params);
			}
			return $url;
//			echo $url;
//			echo '<pre>';  //格式化输出
//			print_r($_SERVER);
//			echo '</pre>';
		}
		
		
		public function __get($args){
			if($args == "limit")
				return $this->limit;
			else
				return null;
		}
		private function start(){
			if($this->total==0)
				return 0;
			else
				return ($this->page-1)*$this->listRows+1;
		}
		private function end(){
			return min($this->page*$this->listRows,$this->total);
		}
		private function first(){
			if($this->page==1)
				$html="";
			else
				$html="&nbsp;&nbsp;<a href='".$this->uri."&page=1'>".$this->config["first"]."</a>&nbsp;&nbsp;";
			return $html;
		}
		private function prev(){
			$html="";
			if($this->page==1)
				$html.='<li>
                  			<a href="'.$this->uri.'&page=1" aria-label="Previous">
                  				<span aria-hidden="true">&laquo;</span>
                  			</a>
                  	</li>';
			else
				$html.='<li>
                  			<a href="'.$this->uri."&page=".(($this->page)-1).'" aria-label="Previous">
                  				<span aria-hidden="true">&laquo;</span>
                  			</a>
                  	</li>';
//				$html="&nbsp;&nbsp;<a href='".$this->uri."&page=".(($this->page)-1)."'>".$this->config["prev"]."</a>&nbsp;&nbsp;";
			return $html;
		}
		private function pageList(){
			$linkPage="";
			$inum= floor($this->listNum/2);
			if(($this->page+$inum)>($this->pageNum)){
				for($i=$inum+($this->page+$inum)-($this->pageNum);$i>=1;$i--){//678
				$page=0;// 2+       9+2         -     10  
				$page=$this->page-$i;//
						//9     -13-(9+2-10)
				if($page>=1)
					$linkPage.='<li>
									<a href="'.$this->uri.'&page='.$page.'">'.$page.'</a>
									</li>';
				else
					continue;
			}
			$linkPage.='
													<li>
														<a href="'.$this->uri.'&page='.$this->page.'"style="background-color: #c6bdbd;">'.$this->page.'</a>
													</li>';
										for($i=1;$i<=$inum;$i++){
											$page=0;
											$page=$this->page+$i;
											if($page<=$this->pageNum)
												$linkPage.="<li>
																<a href='".$this->uri."&page=".$page."'>".$page."</a>
															</li>";
											else
												break;
										}
				
			}else if(($this->page-$inum)<1){
				for($i=$inum;$i>=1;$i--){
								$page=0;
								$page=$this->page-$i;
								if($page>=1)
									$linkPage.='<li>
													<a href="'.$this->uri.'&page='.$page.'">'.$page.'</a>
													</li>';
								else
									continue;
							}
							$linkPage.='
										<li>
											<a href="'.$this->uri.'&page='.$this->page.'"style="background-color: #c6bdbd;">'.$this->page.'</a>
										</li>';
							for($i=1;$i<=$inum+($inum-$this->page)+1;$i++){
								$page=0;
								$page=$this->page+$i;
								if($page<=$this->pageNum)
									$linkPage.="<li>
													<a href='".$this->uri."&page=".$page."'>".$page."</a>
												</li>";
								else
									break;
							}			
			}else{
				for($i=$inum;$i>=1;$i--){
								$page=0;
								$page=$this->page-$i;
								if($page>=1)
									$linkPage.='<li>
													<a href="'.$this->uri.'&page='.$page.'">'.$page.'</a>
													</li>';
								else
									continue;
							}
							$linkPage.='
										<li>
											<a href="'.$this->uri.'&page='.$this->page.'"style="background-color: #c6bdbd;">'.$this->page.'</a>
										</li>';
							for($i=1;$i<=$inum;$i++){
								$page=0;
								$page=$this->page+$i;
								if($page<=$this->pageNum)
									$linkPage.="<li>
													<a href='".$this->uri."&page=".$page."'>".$page."</a>
												</li>";
								else
									break;
							}
			}
			return $linkPage;
		} 
		private function next(){
			if($this->page==$this->pageNum)
				$html='<li>
                  			<a href="'.$this->uri."&page=".$this->page.'" aria-label="Next">
                  				<span aria-hidden="true">&raquo;</span>
                  			</a>
                  </li>';
			else
				$html='<li>
                  			<a href="'.$this->uri."&page=".(($this->page)+1).'" aria-label="Next">
                  				<span aria-hidden="true">&raquo;</span>
                  			</a>
                  </li>';
			return $html;
		}
		private function last(){
			if($this->page==$this->pageNum)
				$html="";
			else
				$html="<li>
							<a href='".$this->uri."&page=".$this->pageNum."'>".$this->config["last"]."</a></li>";
			return $html;
		}
		private function goPage(){
			return '&nbsp;&nbsp;
			<input type="text" onkeydown="javascript:
				if(event.keyCode==13){
					var page=(this.value>'.$this->pageNum.')?'.$this->pageNum.':this.value;
					location=\''.$this->uri.'&page=\'+page+\'\'
			}"
			value="'.$this->page.'" style="width:25px">
			<input type="button" value="GO"
				onclick="
				javascript:
					var page=(this.previousElementSibling.value>'.$this->pageNum.')?'.$this->pageNum.':this.previousElementSibling.value;
					location=\''.$this->uri.'&page=\'+page+\'\'
				">
			&nbsp;&nbsp;';
		}
		function Fpage($dispaly=array(0,1,2,3,4,5,6,7,8)){
			$html="";
			$Fpage="";
			$html[0]='&nbsp;&nbsp;共有<b>'.$this->total.'</b>'.$this->config["header"].'&nbsp;&nbsp;';
			$html[1]='&nbsp;&nbsp;每页显示<b>'.(($this->end())-($this->start())+1).'</b>条，本页为第<b>'.$this->start().'-'.$this->end().'</b>条&nbsp;&nbsp;';
			$html[2]='&nbsp;&nbsp;总共<b>'.$this->total.'</b>条数据&nbsp;&nbsp;当前是第<b>'.$this->page.'</b>/'.$this->pageNum.'页';
			$html[3]=$this->first();
			$html[4]=$this->prev();
			$html[5]=$this->pageList();
			$html[6]=$this->next();
			$html[7]=$this->last();
			$html[8]=$this->goPage();
			foreach($dispaly as $index){
				$Fpage.=$html[$index];
			}
//			for($i=0;$i<count($dispaly)
				
			
			return $Fpage;
		}
	}
?>