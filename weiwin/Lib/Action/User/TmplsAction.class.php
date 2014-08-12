<?php

/**
 * 通用模板管理
 * */
class TmplsAction extends UserAction {

    public function index() {
        $db = D('Wxuser');
        $where['token'] = session('token');
        $where['uid'] = session('uid');
        $info = $db->where($where)->find();
        $this->assign('info', $info);
        $this->display();
    }

    public function add() {
        $gets = $this->_get('style');
        $db = M('Wxuser');
        switch ($gets) {
            case 1:
                $data['tpltypeid'] = 1;
                $data['tpltypename'] = '101_index';
                break;
            case 2:
                $data['tpltypeid'] = 2;
                $data['tpltypename'] = '102_index';
                break;
            case 3:
                $data['tpltypeid'] = 3;
                $data['tpltypename'] = '103_index';
                break;
            case 4:
                $data['tpltypeid'] = 4;
                $data['tpltypename'] = '104_index';
                break;
            case 5:
                $data['tpltypeid'] = 5;
                $data['tpltypename'] = '105_index';
                break;
            case 6:
                $data['tpltypeid'] = 6;
                $data['tpltypename'] = '106_index';
                break;
            case 7:
                $data['tpltypeid'] = 7;
                $data['tpltypename'] = '107_index';
                break;
            case 8:
                $data['tpltypeid'] = 8;
                $data['tpltypename'] = '108_index';
                break;
            case 9:
                $data['tpltypeid'] = 9;
                $data['tpltypename'] = '109_index';
                break;
            case 10:
                $data['tpltypeid'] = 10;
                $data['tpltypename'] = '110_index';
                break;
            case 11:
                $data['tpltypeid'] = 11;
                $data['tpltypename'] = '111_index';
                break;
            case 12:
                $data['tpltypeid'] = 12;
                $data['tpltypename'] = '112_index';
                break;
            case 13:
                $data['tpltypeid'] = 13;
                $data['tpltypename'] = '113_index';
                break;
            case 14:
                $data['tpltypeid'] = 14;
                $data['tpltypename'] = '114_index';
                break;
			case 15:
                $data['tpltypeid'] = 15;
                $data['tpltypename'] = '115_index';
                break;
			case 16:
                $data['tpltypeid'] = 16;
                $data['tpltypename'] = '116_index';
                break;
			case 17:
                $data['tpltypeid'] = 17;
                $data['tpltypename'] = '117_index';
                break;
			case 18:
                $data['tpltypeid'] = 18;
                $data['tpltypename'] = '118_index';
                break;
			case 19:
                $data['tpltypeid'] = 19;
                $data['tpltypename'] = '119_index';
                break;
			case 20:
                $data['tpltypeid'] = 20;
                $data['tpltypename'] = '120_index';
                break;
			case 21:
                $data['tpltypeid'] = 21;
                $data['tpltypename'] = '121_index';
                break;
			case 22:
                $data['tpltypeid'] = 22;
                $data['tpltypename'] = '122_index';
                break;
			case 23:
                $data['tpltypeid'] = 23;
                $data['tpltypename'] = '123_index';
                break;
			case 24:
                $data['tpltypeid'] = 24;
                $data['tpltypename'] = '124_index';
                break;
			case 25:
                $data['tpltypeid'] = 25;
                $data['tpltypename'] = '125_index';
                break;
			case 26:
                $data['tpltypeid'] = 26;
                $data['tpltypename'] = '126_index';
                break;
			case 27:
                $data['tpltypeid'] = 27;
                $data['tpltypename'] = '127_index';
                break;
			case 28:
                $data['tpltypeid'] = 28;
                $data['tpltypename'] = '128_index';
                break;
			case 29:
                $data['tpltypeid'] = 29;
                $data['tpltypename'] = '129_index';
                break;
			case 30:
                $data['tpltypeid'] = 30;
                $data['tpltypename'] = '130_index';
                break;
			case 31:
                $data['tpltypeid'] = 31;
                $data['tpltypename'] = '131_index';
                break;
			case 32:
                $data['tpltypeid'] = 32;
                $data['tpltypename'] = '132_index';
                break;
			case 33:
                $data['tpltypeid'] = 33;
                $data['tpltypename'] = '133_index';
                break;
			case 34:
                $data['tpltypeid'] = 34;
                $data['tpltypename'] = '134_index';
                break;
			case 35:
                $data['tpltypeid'] = 35;
                $data['tpltypename'] = '135_index';
                break;
			case 36:
                $data['tpltypeid'] = 36;
                $data['tpltypename'] = '136_index';
                break;
			case 37:
                $data['tpltypeid'] = 37;
                $data['tpltypename'] = '137_index';
                break;
			case 38:
                $data['tpltypeid'] = 38;
                $data['tpltypename'] = '138_index';
                break;
			case 39:
                $data['tpltypeid'] = 39;
                $data['tpltypename'] = '139_index';
                break;
			case 40:
                $data['tpltypeid'] = 40;
                $data['tpltypename'] = '140_index';
                break;
			case 41:
                $data['tpltypeid'] = 41;
                $data['tpltypename'] = '141_index';
                break;
			case 42:
                $data['tpltypeid'] = 42;
                $data['tpltypename'] = '142_index';
                break;
			case 43:
                $data['tpltypeid'] = 43;
                $data['tpltypename'] = '143_index';
                break;
			case 44:
                $data['tpltypeid'] = 44;
                $data['tpltypename'] = '144_index';
                break;
			case 45:
                $data['tpltypeid'] = 45;
                $data['tpltypename'] = '145_index';
                break;
			case 46:
                $data['tpltypeid'] = 46;
                $data['tpltypename'] = '146_index';
                break;
                case 47:
                $data['tpltypeid'] = 47;
                $data['tpltypename'] = '147_index';
                break;
				case 48:
                $data['tpltypeid'] = 48;
                $data['tpltypename'] = '148_index';
                break;
				case 49:
                $data['tpltypeid'] = 49;
                $data['tpltypename'] = '149_index';
                break;
				case 50:
                $data['tpltypeid'] = 50;
                $data['tpltypename'] = '150_index';
                break;
				case 51:
                $data['tpltypeid'] = 51;
                $data['tpltypename'] = '151_index';
                break;
				case 52:
                $data['tpltypeid'] = 52;
                $data['tpltypename'] = '152_index';
                break;
				case 53:
                $data['tpltypeid'] = 53;
                $data['tpltypename'] = '153_index';
                break;
				case 54:
                $data['tpltypeid'] = 54;
                $data['tpltypename'] = '154_index';
                break;
				case 55:
                $data['tpltypeid'] = 55;
                $data['tpltypename'] = '155_index';
                break;
				case 56:
                $data['tpltypeid'] = 56;
                $data['tpltypename'] = '156_index';
                break;
		case 57:
                $data['tpltypeid'] = 57;
                $data['tpltypename'] = '157_index';
                break;
		case 58:
                $data['tpltypeid'] = 58;
                $data['tpltypename'] = '158_index';
                break;
		case 59:
                $data['tpltypeid'] = 59;
                $data['tpltypename'] = '159_index';
                break;
		case 60:
                $data['tpltypeid'] = 60;
                $data['tpltypename'] = '160_index';
                break;
		case 61:
                $data['tpltypeid'] = 61;
                $data['tpltypename'] = '161_index';
                break;
		case 62:
                $data['tpltypeid'] = 62;
                $data['tpltypename'] = '162_index';
                break;
				case 63:
                $data['tpltypeid'] = 63;
                $data['tpltypename'] = '163_index';
                break;
				case 64:
                $data['tpltypeid'] = 64;
                $data['tpltypename'] = '164_index';
                break;
				case 65:
                $data['tpltypeid'] = 65;
                $data['tpltypename'] = '165_index';
                break;
				case 66:
                $data['tpltypeid'] = 66;
                $data['tpltypename'] = '166_index';
                break;
				case 67:
                $data['tpltypeid'] = 67;
                $data['tpltypename'] = '167_index';
                break;
				case 68:
                $data['tpltypeid'] = 68;
                $data['tpltypename'] = '168_index';
                break;
				case 69:
                $data['tpltypeid'] = 69;
                $data['tpltypename'] = '169_index';
                break;
				case 70:
                $data['tpltypeid'] = 70;
                $data['tpltypename'] = '170_index';
                break;
				case 71:
                $data['tpltypeid'] = 71;
                $data['tpltypename'] = '171_index';
                break;
				case 72:
                $data['tpltypeid'] = 72;
                $data['tpltypename'] = '172_index';
                break;
				case 73:
                $data['tpltypeid'] = 73;
                $data['tpltypename'] = '173_index';
                break;
				case 74:
                $data['tpltypeid'] = 74;
                $data['tpltypename'] = '174_index';
                break;
				case 75:
                $data['tpltypeid'] = 75;
                $data['tpltypename'] = '175_index';
                break;
				case 76:
                $data['tpltypeid'] = 76;
                $data['tpltypename'] = '176_index';
                break;
				case 77:
                $data['tpltypeid'] = 77;
                $data['tpltypename'] = '177_index';
                break;
				
				case 78:
                $data['tpltypeid'] = 78;
                $data['tpltypename'] = '178_index';
                break;
				case 79:
                $data['tpltypeid'] = 79;
                $data['tpltypename'] = '179_index';
                break;
				case 80:
                $data['tpltypeid'] = 80;
                $data['tpltypename'] = '180_index';
                break;
				case 81:
                $data['tpltypeid'] = 81;
                $data['tpltypename'] = '181_index';
                break;
				case 82:
                $data['tpltypeid'] = 82;
                $data['tpltypename'] = '182_index';
                break;
				case 83:
                $data['tpltypeid'] = 83;
                $data['tpltypename'] = '183_index';
                break;
				case 84:
                $data['tpltypeid'] = 84;
                $data['tpltypename'] = '184_index';
                break;
				case 85:
                $data['tpltypeid'] = 85;
                $data['tpltypename'] = '185_index';
                break;
				
        }
        $where['token'] = session('token');
        $db->where($where)->save($data);
        //
        M('Home')->where(array('token'=>session('token')))->save(array('advancetpl'=>0));
    }

    public function lists() {
        $gets = $this->_get('style');
        $db = M('Wxuser');
        switch ($gets) {
            case 4:
                $data['tpllistid'] = 4;
                $data['tpllistname'] = 'ktv_list';
                break;
            case 1:
                $data['tpllistid'] = 1;
                $data['tpllistname'] = 'yl_list';
                break;
			case 5:
                $data['tpllistid'] = 5;
                $data['tpllistname'] = 'yl_list002';
                break;
			case 6:
                $data['tpllistid'] = 6;
                $data['tpllistname'] = 'yl_list003';
                break;
			case 7:
                $data['tpllistid'] = 7;
                $data['tpllistname'] = 'yl_list004';
                break;
			case 8:
                $data['tpllistid'] = 8;
                $data['tpllistname'] = 'yl_list005';
                break;
				
				 case 9:
                $data['tpllistid'] = 9;
                $data['tpllistname'] = '138wo_list0';
                break;
            case 10:
                $data['tpllistid'] = 10;
                $data['tpllistname'] = '138wo_list1';
                break;
			case 11:
                $data['tpllistid'] = 11;
                $data['tpllistname'] = '138wo_list2';
                break;
			case 12:
                $data['tpllistid'] = 12;
                $data['tpllistname'] = '138wo_list3';
                break;
			case 13:
                $data['tpllistid'] = 13;
                $data['tpllistname'] = '138wo_list4';
                break;
			case 14:
                $data['tpllistid'] = 14;
                $data['tpllistname'] = '138wo_list5';
                break;
			case 15:
                $data['tpllistid'] = 15;
                $data['tpllistname'] = '138wo_list6';
                break;
			case 16:
                $data['tpllistid'] = 16;
                $data['tpllistname'] = '138wo_list7';
                break;
			case 17:
                $data['tpllistid'] = 17;
                $data['tpllistname'] = '138wo_list8';
                break;
        }
        $where['token'] = session('token');
        $db->where($where)->save($data);
    }

    public function content() {
        $gets = $this->_get('style');
        $db = M('Wxuser');
        switch ($gets) {
            case 1:
                $data['tplcontentid'] = 1;
                $data['tplcontentname'] = 'yl_content';
                break;
            case 3:
                $data['tplcontentid'] = 3;
                $data['tplcontentname'] = 'ktv_content';
                break;
				
				 case 11:
                $data['tplcontentid'] = 11;
                $data['tplcontentname'] = '138wo_content0';
                break;
            case 12:
                $data['tplcontentid'] = 12;
                $data['tplcontentname'] = '138wo_content1';
                break;
			case 13:
                $data['tplcontentid'] = 13;
                $data['tplcontentname'] = '138wo_content2';
                break;
			case 14:
                $data['tplcontentid'] = 14;
                 $data['tplcontentname'] = '138wo_content3';
                break;
        }
        $where['token'] = session('token');
        $db->where($where)->save($data);
    }
    
    public function background() {
        $data['color_id'] = $this->_get('style');
        $db = M('Wxuser');
        $where['token'] = session('token');
        $db->where($where)->save($data);
    }

    public function insert() {
        
    }

    public function upsave() {
	
    }

}

?>