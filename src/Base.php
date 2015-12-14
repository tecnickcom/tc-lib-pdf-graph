<?php
/**
 * Base.php
 *
 * @since       2011-05-23
 * @category    Library
 * @package     PdfGraph
 * @author      Nicola Asuni <info@tecnick.com>
 * @copyright   2011-2015 Nicola Asuni - Tecnick.com LTD
 * @license     http://www.gnu.org/copyleft/lesser.html GNU-LGPL v3 (see LICENSE.TXT)
 * @link        https://github.com/tecnickcom/tc-lib-pdf-graph
 *
 * This file is part of tc-lib-pdf-graph software library.
 */

namespace Com\Tecnick\Pdf\Graph;

use \Com\Tecnick\Color\Pdf as PdfColor;
use \Com\Tecnick\Pdf\Graph\Exception as GraphException;

/**
 * Com\Tecnick\Pdf\Graph\Base
 *
 * @since       2011-05-23
 * @category    Library
 * @package     PdfGraph
 * @author      Nicola Asuni <info@tecnick.com>
 * @copyright   2011-2015 Nicola Asuni - Tecnick.com LTD
 * @license     http://www.gnu.org/copyleft/lesser.html GNU-LGPL v3 (see LICENSE.TXT)
 * @link        https://github.com/tecnickcom/tc-lib-pdf-graph
 */
abstract class Base
{
    /**
     * Current page height
     *
     * @var float
     */
    protected $pageh = 0;

    /**
     * Unit of measure conversion ratio
     *
     * @var float
     */
    protected $kunit = 1.0;

    /**
     * Color object
     *
     * @var PdfColor
     */
    protected $col;

    /**
     * Initialize
     *
     * @param float  $kunit  Unit of measure conversion ratio.
     * @param float  $pageh  Page height
     */
    public function __construct($kunit, $pageh, PdfColor $color)
    {
        $this->setKUnit($kunit);
        $this->setPageHeight($pageh);
        $this->col = $color;
        $this->init();
    }

    /**
     * Initialize objects
     */
    abstract public function init();

    /**
     * Set page height
     *
     * @param float  $pageh  Page height
     */
    public function setPageHeight($pageh)
    {
        $this->pageh = (float) $pageh;
    }

    /**
     * Set unit of measure conversion ratio.
     *
     * @param float  $kunit  Unit of measure conversion ratio.
     */
    public function setKUnit($kunit)
    {
        $this->kunit = (float) $kunit;
    }
}
