<?php
/**
 * Created by Cessel's WEBGate Studio.
 * User: Cessel
 * Date: 08.07.2020
 * Time: 21:19
 */
class Redirects extends Core {
	private $secret;
	public function __construct() {
		$this->secret = 'fJKLJFKL:Fhlhf8f3498fhp9fpHF9hp493hf3pfh[ewf34fPU(FH($(8fh430fh';
	}
	public function set_redirects_page(){
		global $Theme;

        if(!empty($_REQUEST['secret']) && $_REQUEST['secret'] == $this->secret){
        	if(!empty($_REQUEST['from']) && !empty($_REQUEST['to'])){
        		if(empty($_REQUEST['start'])){
			        $html = '<h1>Adding New Redirect</h1>';
			        $html .= '<h2>FROM: '.$_REQUEST['from'].'</h2>';
			        $html .= '<h2>TO: '.$_REQUEST['to'].'</h2>';
			        $html .= '<form method="post">';
			        $html .= '<input type="hidden" name="from" value="'.$_REQUEST['from'].'">';
			        $html .= '<input type="hidden" name="to" value="'.$_REQUEST['to'].'">';
			        $html .= '<input type="hidden" name="action" value="start">';
			        $html .= '<input type="hidden" name="secret" value="'.$_REQUEST['secret'].'">';
			        $html .= '<button type="submit">Добавить перенаправление</button>';
			        $html .= '</form>';
			        $Theme->get_header();
			        echo $html;
			        $Theme->get_footer();
		        }
        		else if($_REQUEST['action'] == 'start'){
        			$check_sql = 'SELECT * FROM `mopito_redirects` WHERE `redirect_from` = "'.$_REQUEST['from'].'" AND `redirect_to` = "'.$_REQUEST['to'].'"';
        			$result = self::sql($check_sql);
			        $row = mysqli_fetch_row($result);
			        if($row){
			        	$html = '<h2>Такое перенаправление уже добавлено</h2>';
			        	echo $html;
			        }
			        else{
				        $sql = 'INSERT INTO `mopito_redirects` (`id`, `redirect_from`, `redirect_to`) values ("","'.$_REQUEST['from'].'","'.$_REQUEST['to'].'")';
				        self::sql($sql);
			        }
		        }
        		else if($_REQUEST['action'] == 'show'){
        			$sql = 'SELECT * FROM `mopito_redirects` WHERE 1';
			        $result = self::sql($sql);
			        $html = '<table>';
			        $html .= '<th>';
			        $html .= '<td>FROM</td>';
			        $html .= '<td>TO</td>';
			        $html .= '</th>';

			        while($row = mysqli_fetch_row($result)){
				        $html .= '<tr>';
				        $html .= '<td>'.$row[1].'</td>';
				        $html .= '<td>'.$row[2].'</td>';
				        $html .= '</tr>';
			        }
			        $html .= '</table>';
			        echo $html;
        		}
	        }
        }
        else{
	        die('<h1>Доступ запрещен</h1>');
        }

    }
}

