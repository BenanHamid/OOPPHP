/**
 * Description of tr_staj
 * Калкулатор за трудов стаж
 *
 * @author http://hankrum.info
 */
class tr_staj {
    const Dni = 30; //30 дни са един месец
    const Mes = 12; //12 месеца са 1 година
 
    public $n = 'N:'; //Номер
    public $dd = 'Дни'; //Текста в таблицата и множествено число
    public $de = 'Ден'; //Единствено число
    public $mm = 'Месеци'; //Текста в таблицата и множествено число
    public $mmm = 'Месеца'; //Текста в таблицата и множествено число
    public $me = 'Месец'; //Единствено число
    public $yy = 'Години'; //Текста в таблицата и множествено число
    public $ye = 'Година'; //Единствено число
    public $td_T = 60; //Ширина на колоната на Години, Месеци и Дни
    public $td_N = 30; //Ширина на колоната с номерата на редовете
    public $input = 5; //Ширина на клетката за въвеждане на Години, Месеци и Дни
    public $action; //Екшън на формата
    public $izb = 'Избери броя на редовете'; //Текст за избор на броя на редовете
    public $iz = 'Изчисли'; //Текст за бутона за събмитване на изчисленията
    public $ots = 'Общия ви трудов стаж е '; //Текст за трудовия стаж
    public $b_col = 'darkred'; //Цвят на борда
    public $t_col = 'white'; //Цвят на текста
 
    private $b_r = 'border-radius: '; //От CSS3 - обли ъгли (все още не работи на IE)
    private $tr = '<tr>';
    private $trr = '</tr>';
    private $td = '<td class="blok" style="width: ';
    private $in = '<input class="in" ';
    private $td1 = '<td>';
    private $tdd = '</td>';
    private $tab = '<table>';
    private $tabb = '</table>';
    private $i_t = '<input type="text" name="';
    private $i_h = '<input type="hidden" name="';
    private $i_s = '<input type="submit" value="';
 
    function __construct($action) {
        $this->action = $action;
        echo '<style type="text/css">
              .blok {background: ' . $this->b_col . ';
                     color: '. $this->t_col .';
                     text-align: center;}
 
              .in {border: solid 1px ' . $this->b_col . ';
                   text-align: center;}
              </style>'; //CSS
        echo '<form method="post" action="' . $action . '">';
        if ($_POST['br_da'] != 1 && $_POST['ymd'] != 1) {
            echo $this->i_t . 'br" size="3" />';
            echo $this->i_h . 'br_da" value="1" />';
            echo $this->i_s . $this->izb . '" />';
            echo $this->tab
            . $this->tr
            . $this->td . $this->td_N . 'px; -moz-' . $this->b_r . '10px 0px 0px 10px; -webkit-' . $this->b_r . '10px 0px 0px 10px; -o-' . $this->b_r . '10px 0px 0px 10px; ' . $this->b_r . '0px 10px 0px 10px;">
                    ' . $this->n . $this->tdd . $this->td . $this->td_T . 'px;">
                    ' . $this->yy . $this->tdd . $this->td . $this->td_T . 'px;">
                    ' . $this->mm . $this->tdd . $this->td . $this->td_T . 'px;">
                    ' . $this->dd . $this->tdd . $this->td . $this->td_N . 'px; -moz-' . $this->b_r . '0px 10px 10px 0px; -webkit-' . $this->b_r . '0px 10px 10px 0px; -o-' . $this->b_r . '0px 10px 10px 0px; ' . $this->b_r . '0px 10px 10px 0px;">
                    ' . $this->n . $this->tdd
            . $this->trr;
            echo $this->tabb;
        }
        if ($_POST['br'] == 0) {
            $_POST['br'] = 1;
        }
        if ($_POST['br_da'] == 1 && $_POST['ymd'] != 1) {
            echo $this->tab
            . $this->tr
            . $this->td . $this->td_N . 'px; -moz-' . $this->b_r . '10px 0px 0px 0px; -webkit-' . $this->b_r . '10px 0px 0px 0px; -o-' . $this->b_r . '10px 0px 0px 0px; ' . $this->b_r . '10px 0px 0px 0px;">
                    ' . $this->n . $this->tdd . $this->td . $this->td_T . 'px;">
                    ' . $this->yy . $this->tdd . $this->td . $this->td_T . 'px;">
                    ' . $this->mm . $this->tdd . $this->td . $this->td_T . 'px;">
                    ' . $this->dd . $this->tdd . $this->td . $this->td_N . 'px; -moz-' . $this->b_r . '0px 10px 0px 0px; -webkit-' . $this->b_r . '0px 10px 0px 0px; -o-' . $this->b_r . '0px 10px 0px 0px; ' . $this->b_r . '0px 10px 0px 0px;">
                    ' . $this->n . $this->tdd
            . $this->trr;
            for ($b = 1; $b < (int) $_POST['br'] + 1; $b++) {
                echo $this->tr;
                echo $this->td . $this->td_N . 'px;">' . $b . '</td>';
                echo $this->td1 . $this->in . 'size="' . $this->input . '" type="text" name="y' . $b . '" /></td>';
                echo $this->td1 . $this->in . 'size="' . $this->input . '" type="text" name="m' . $b . '" /></td>';
                echo $this->td1 . $this->in . 'size="' . $this->input . '" type="text" name="d' . $b . '" /></td>';
                echo $this->td . $this->td_N . 'px;">' . $b . '</td>';
                echo $this->trr;
            }
            echo $this->tr
            . $this->td . $this->td_N . 'px; -moz-' . $this->b_r . '0px 0px 0px 10px; -webkit-' . $this->b_r . '0px 0px 0px 10px; -o-' . $this->b_r . '0px 0px 0px 10px; ' . $this->b_r . '0px 0px 0px 10px;">
                    ' . $this->n . $this->tdd . $this->td . $this->td_T . 'px;">
                    ' . $this->yy . $this->tdd . $this->td . $this->td_T . 'px;">
                    ' . $this->mm . $this->tdd . $this->td . $this->td_T . 'px;">
                    ' . $this->dd . $this->tdd . $this->td . $this->td_N . 'px; -moz-' . $this->b_r . '0px 0px 10px 0px; -webkit-' . $this->b_r . '0px 0px 10px 0px; -o-' . $this->b_r . '0px 0px 10px 0px; ' . $this->b_r . '0px 0px 10px 0px;">
                    ' . $this->n . $this->tdd
            . $this->trr;
            echo $this->i_h . 'broj" value="' . $b . '" />';
            echo $this->i_h . 'ymd" value="1" />';
            echo $this->i_s . $this->iz . '" />';
            echo $this->tabb;
        }
        echo '</form>';
        if ($_POST['ymd'] == 1) {
            $broj = (int) $_POST['broj'];
            for ($b = 1; $b < $broj; $b++) {
                $dni[$b] = (int) $_POST['d' . $b];
            }
            $d = array_sum($dni);
            if ($d >= self::Dni) {
                $m = (int) ($d / self::Dni);
                $d = $d - (self::Dni * $m);
                if ($m >= Mes) {
                    $y = (int) ($m / self::Mes);
                    $m = $m - (self::Mes * $y);
                }
            }
            for ($b = 1; $b < $broj; $b++) {
                $mes[$b] = (int) $_POST['m' . $b];
            }
            $m = $m + array_sum($mes);
            if ($m >= self::Mes) {
                $y = (int) ($m / self::Mes);
                $m = $m - (self::Mes * $y);
            }
            for ($b = 1; $b < $broj; $b++) {
                $god[$b] = (int) $_POST['y' . $b];
            }
            $y = $y + array_sum($god); //Дали е единствено или множествено число
            if ($d == 1) {
                $dn = ' ' . $this->de;
            } else {
                $dn = ' ' . $this->dd;
            }
            if ($m == 1) {
                $ms = ' ' . $this->me;
            } else {
                $ms = ' ' . $this->mmm;
            }
            if ($y == 1) {
                $yy = ' ' . $this->ye;
            } else {
                $yy = ' ' . $this->yy;
            }
            echo $this->ots . $y . $yy . ', ' . $m . $ms . ' и ' . $d . $dn . '.';
        }
    }
 
}