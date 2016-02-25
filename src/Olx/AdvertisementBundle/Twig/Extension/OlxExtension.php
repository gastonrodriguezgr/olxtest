<?php
namespace Olx\AdvertisementBundle\Twig\Extension;

use Symfony\Component\HttpKernel\KernelInterface;
use Symfony\Bundle\TwigBundle\DependencyInjection\TwigExtension;
use Symfony\Component\Validator\Constraints\DateTime;
use \Twig_Extensions_Extension_Text;
use \Twig_ExpressionParser;
use \Twig_Function_Method;
use \Twig_Extension;


class OlxExtension extends Twig_Extension
{
    const CARPETA_ADJUNTOS = 'adjuntos/';

    public function __construct()
    {
    }

    /**
     * {@inheritdoc}
     */
    public function getFunctions()
    {
        return array(
            'getSmallMonth' => new Twig_Function_Method($this, 'getSmallMonth'),
            'getDateStringFormat' => new Twig_Function_Method($this, 'getDateStringFormat')
        );
    }

    /**
     * {@inheritdoc}
     */
    public function getGlobals()
    {
        return array(
            'texto' => new Twig_Extensions_Extension_Text(),
        );
    }

    /**
     * {@inheritdoc}
     */
    public function getFilters()
    {
        return array(
            //new Twig_SimpleFilter('rot13', 'str_rot13'),
        );
    }

    public function getOperators()
    {
        return array(
            array(
                '!' => array(  'precedence' => 50,
                    'class'
                    => 'Twig_Node_Expression_Unary_Not'
                ),
            ),
            array(
                '||' => array(  'precedence' => 10,
                    'class'
                    => 'Twig_Node_Expression_Binary_Or',
                    'associativity'
                    => Twig_ExpressionParser::OPERATOR_LEFT
                ),
                '&&' => array(  'precedence' => 15,
                    'class'
                    => 'Twig_Node_Expression_Binary_And',
                    'associativity'
                    => Twig_ExpressionParser::OPERATOR_LEFT
                ),
            ),
        );
    }


    /**
     * Returns the small translation of the date.
     * @param String $month
     * @return string The extension name
     */
    public function getSmallMonth($month){
        switch ($month){
            case 'Jan': return 'Ene';
            case 'Feb': return 'Feb';
            case 'Mar': return 'Mar';
            case 'Apr': return 'Abr';
            case 'May': return 'May';
            case 'Jun': return 'Jun';
            case 'Jul': return 'Jul';
            case 'Aug': return 'Ago';
            case 'Sep': return 'Sep';
            case 'Oct': return 'Oct';
            case 'Nov': return 'Nov';
            case 'Dec': return 'Dic';
        }
    }

    /**
     * Returns the small translation of the date.
     * @param String $date
     * @return string The extension name
     */
    public function getDateStringFormat($date){
        $d = $date->format('d');
        $m = $this->getSmallMonth($date->format('M'));
        $y = $date->format('Y');
        return $d." ".$m." ".$y;
    }

    /**
     * Returns the name of the extension.
     *
     * @return string The extension name
     */
    public function getName()
    {
        return 'olxHelper';
    }
}
