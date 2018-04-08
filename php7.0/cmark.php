<?php
// Start of extension: cmark
// - parsed on POSIX with PHP 7.0.29 (extension version 1.0.0)

namespace CommonMark {

    /**
     * @var int
     */
    const Version = 7171;

    /**
     * @var string
     */
    const VersionString = '0.28.3';

    /**
     * Provides an incremental parser as an alternative to the simple Parsing API function
     *
     * @since cmark >= 1.0.0
     *
     * @link http://www.php.net/manual/en/class.commonmark-parser.php
     */
    final class Parser
    {
        /**
         * Parsing
         *
         * @param mixed|null $options
         *
         * @since cmark >= 1.0.0
         *
         * @link http://www.php.net/manual/en/commonmark-parser.construct.php
         */
        public function __construct($options = null)
        {
        }

        /**
         * Parsing
         *
         * @return CommonMark\Node
         *
         * @since cmark >= 1.0.0
         *
         * @link http://www.php.net/manual/en/commonmark-parser.finish.php
         */
        public function finish()
        {
        }

        /**
         * Parsing
         *
         * @param mixed $buffer
         *
         * @return void
         *
         * @since cmark >= 1.0.0
         *
         * @link http://www.php.net/manual/en/commonmark-parser.parse.php
         */
        public function parse($buffer)
        {
        }
    }

    /**
     * Represents an Abstract Node, this final abstract is not for direct use by the programmer.
     *
     * @since cmark >= 1.0.0
     *
     * @link http://www.php.net/manual/en/class.commonmark-node.php
     */
    abstract class Node implements CommonMark\Interfaces\IVisitable, Traversable
    {
        /**
         * Visitation
         *
         * @param CommonMark\Interfaces\IVisitor $visitor
         *
         * @return void
         *
         * @since cmark >= 1.0.0
         *
         * @link http://www.php.net/manual/en/commonmark-node.accept.php
         */
        public function accept($visitor)
        {
        }

        /**
         * AST Manipulation
         *
         * @param CommonMark\Node $child
         *
         * @return CommonMark\Node
         *
         * @since cmark >= 1.0.0
         *
         * @link http://www.php.net/manual/en/commonmark-node.appendchild.php
         */
        public function appendChild($child)
        {
        }

        /**
         * AST Manipulation
         *
         * @param CommonMark\Node $sibling
         *
         * @return CommonMark\Node
         *
         * @since cmark >= 1.0.0
         *
         * @link http://www.php.net/manual/en/commonmark-node.insertafter.php
         */
        public function insertAfter($sibling)
        {
        }

        /**
         * AST Manipulation
         *
         * @param CommonMark\Node $sibling
         *
         * @return CommonMark\Node
         *
         * @since cmark >= 1.0.0
         *
         * @link http://www.php.net/manual/en/commonmark-node.insertbefore.php
         */
        public function insertBefore($sibling)
        {
        }

        /**
         * AST Manipulation
         *
         * @param CommonMark\Node $child
         *
         * @return CommonMark\Node
         *
         * @since cmark >= 1.0.0
         *
         * @link http://www.php.net/manual/en/commonmark-node.prependchild.php
         */
        public function prependChild($child)
        {
        }

        /**
         * AST Manipulation
         *
         * @param CommonMark\Node $target
         *
         * @return CommonMark\Node
         *
         * @since cmark >= 1.0.0
         *
         * @link http://www.php.net/manual/en/commonmark-node.replace.php
         */
        public function replace($target)
        {
        }

        /**
         * AST Manipulation
         *
         * @return void
         *
         * @since cmark >= 1.0.0
         *
         * @link http://www.php.net/manual/en/commonmark-node.unlink.php
         */
        public function unlink()
        {
        }
    }

    /**
     * Rendering
     *
     * @param CommonMark\Node $node
     * @param mixed|null $options
     * @param mixed|null $width
     *
     * @return string
     *
     * @since cmark >= 1.0.0
     *
     * @link http://www.php.net/manual/en/function.commonmark-render.php
     */
    function Render($node, $options = null, $width = null): string
    {
    }

    /**
     * Parsing
     *
     * @param mixed $content
     * @param mixed|null $options
     *
     * @return CommonMark\Node
     *
     * @since cmark >= 1.0.0
     *
     * @link http://www.php.net/manual/en/function.commonmark-parse.php
     */
    function Parse($content, $options = null)
    {
    }
}

namespace CommonMark\Interfaces {

    /**
     * @since cmark >= 1.0.0
     *
     * @link http://www.php.net/manual/en/class.commonmark-interfaces-ivisitable.php
     */
    interface IVisitable
    {
        /**
         * Visitation
         *
         * @param CommonMark\Interfaces\IVisitor $visitor
         *
         * @return void
         *
         * @since cmark >= 1.0.0
         *
         * @link http://www.php.net/manual/en/commonmark-interfaces-ivisitable.accept.php
         */
        public function accept($visitor);
    }

    /**
     * @since cmark >= 1.0.0
     *
     * @link http://www.php.net/manual/en/class.commonmark-interfaces-ivisitor.php
     */
    interface IVisitor
    {
        /**
         * Visitation
         *
         * @param CommonMark\Interfaces\IVisitable $node
         *
         * @return ?int|IVisitable
         *
         * @since cmark >= 1.0.0
         *
         * @link http://www.php.net/manual/en/commonmark-interfaces-ivisitor.enter.php
         */
        public function enter($node);

        /**
         * Visitation
         *
         * @param CommonMark\Interfaces\IVisitable $node
         *
         * @return ?int|IVisitable
         *
         * @since cmark >= 1.0.0
         *
         * @link http://www.php.net/manual/en/commonmark-interfaces-ivisitor.leave.php
         */
        public function leave($node);
    }
}

namespace CommonMark\Node {

    /**
     * @since cmark >= 1.0.0
     *
     * @link http://www.php.net/manual/en/class.commonmark-node-blockquote.php
     */
    final class BlockQuote extends \CommonMark\Node
    {
        public function __construct()
        {
        }
    }

    /**
     * @since cmark >= 1.0.0
     *
     * @link http://www.php.net/manual/en/class.commonmark-node-orderedlist.php
     */
    final class OrderedList extends \CommonMark\Node
    {
        /**
         * OrderedList Construction
         *
         * @param mixed|null $tight
         * @param mixed|null $delimiter
         * @param mixed|null $start
         *
         * @since cmark >= 1.0.0
         *
         * @link http://www.php.net/manual/en/commonmark-node-orderedlist.construct.php
         */
        public function __construct($tight = null, $delimiter = null, $start = null)
        {
        }
    }

    /**
     * @since cmark >= 1.0.0
     *
     * @link http://www.php.net/manual/en/class.commonmark-node-bulletlist.php
     */
    final class BulletList extends \CommonMark\Node
    {
        /**
         * BulletList Construction
         *
         * @since cmark >= 1.0.0
         *
         * @link http://www.php.net/manual/en/commonmark-node-bulletlist.construct.php
         */
        public function __construct()
        {
        }
    }

    /**
     * @since cmark >= 1.0.0
     *
     * @link http://www.php.net/manual/en/class.commonmark-node-item.php
     */
    final class Item extends \CommonMark\Node
    {
        public function __construct()
        {
        }
    }

    /**
     * @since cmark >= 1.0.0
     *
     * @link http://www.php.net/manual/en/class.commonmark-node-codeblock.php
     */
    final class CodeBlock extends CommonMark\Node\Text
    {
        /**
         * CodeBlock Construction
         *
         * @param mixed|null $fence
         * @param mixed|null $literal
         *
         * @since cmark >= 1.0.0
         *
         * @link http://www.php.net/manual/en/commonmark-node-codeblock.construct.php
         */
        public function __construct($fence = null, $literal = null)
        {
        }
    }

    /**
     * @since cmark >= 1.0.0
     *
     * @link http://www.php.net/manual/en/class.commonmark-node-htmlblock.php
     */
    final class HTMLBlock extends CommonMark\Node\Text
    {
        /**
         * @param mixed|null $literal
         *
         * @since cmark >= 1.0.0
         */
        public function __construct($literal = null)
        {
        }
    }

    /**
     * @since cmark >= 1.0.0
     *
     * @link http://www.php.net/manual/en/class.commonmark-node-paragraph.php
     */
    final class Paragraph extends \CommonMark\Node
    {
        public function __construct()
        {
        }
    }

    /**
     * @since cmark >= 1.0.0
     *
     * @link http://www.php.net/manual/en/class.commonmark-node-heading.php
     */
    final class Heading extends \CommonMark\Node
    {
        /**
         * Heading Construction
         *
         * @since cmark >= 1.0.0
         *
         * @link http://www.php.net/manual/en/commonmark-node-heading.construct.php
         */
        public function __construct()
        {
        }
    }

    /**
     * @since cmark >= 1.0.0
     *
     * @link http://www.php.net/manual/en/class.commonmark-node-thematicbreak.php
     */
    final class ThematicBreak extends \CommonMark\Node
    {
        public function __construct()
        {
        }
    }

    /**
     * @since cmark >= 1.0.0
     *
     * @link http://www.php.net/manual/en/class.commonmark-node-softbreak.php
     */
    final class SoftBreak extends \CommonMark\Node
    {
        public function __construct()
        {
        }
    }

    /**
     * @since cmark >= 1.0.0
     *
     * @link http://www.php.net/manual/en/class.commonmark-node-linebreak.php
     */
    final class LineBreak extends \CommonMark\Node
    {
        public function __construct()
        {
        }
    }

    /**
     * @since cmark >= 1.0.0
     *
     * @link http://www.php.net/manual/en/class.commonmark-node-code.php
     */
    final class Code extends CommonMark\Node\Text
    {
        /**
         * @param mixed|null $literal
         *
         * @since cmark >= 1.0.0
         */
        public function __construct($literal = null)
        {
        }
    }

    /**
     * @since cmark >= 1.0.0
     *
     * @link http://www.php.net/manual/en/class.commonmark-node-htmlinline.php
     */
    final class HTMLInline extends CommonMark\Node\Text
    {
        /**
         * @param mixed|null $literal
         *
         * @since cmark >= 1.0.0
         */
        public function __construct($literal = null)
        {
        }
    }

    /**
     * @since cmark >= 1.0.0
     *
     * @link http://www.php.net/manual/en/class.commonmark-node-custominline.php
     */
    final class CustomInline extends \CommonMark\Node
    {
        public function __construct()
        {
        }
    }

    /**
     * @since cmark >= 1.0.0
     *
     * @link http://www.php.net/manual/en/class.commonmark-node-link.php
     */
    final class Link extends \CommonMark\Node
    {
        /**
         * Link Construction
         *
         * @param mixed|null $url
         * @param mixed|null $title
         *
         * @since cmark >= 1.0.0
         *
         * @link http://www.php.net/manual/en/commonmark-node-link.construct.php
         */
        public function __construct($url = null, $title = null)
        {
        }
    }

    /**
     * @since cmark >= 1.0.0
     *
     * @link http://www.php.net/manual/en/class.commonmark-node-image.php
     */
    final class Image extends \CommonMark\Node
    {
        /**
         * Image Construction
         *
         * @param mixed|null $url
         * @param mixed|null $title
         *
         * @since cmark >= 1.0.0
         *
         * @link http://www.php.net/manual/en/commonmark-node-image.construct.php
         */
        public function __construct($url = null, $title = null)
        {
        }
    }

    /**
     * @since cmark >= 1.0.0
     *
     * @link http://www.php.net/manual/en/class.commonmark-node-customblock.php
     */
    final class CustomBlock extends \CommonMark\Node
    {
        public function __construct()
        {
        }
    }

    /**
     * @since cmark >= 1.0.0
     *
     * @link http://www.php.net/manual/en/class.commonmark-node-document.php
     */
    final class Document extends \CommonMark\Node
    {
        public function __construct()
        {
        }
    }

    /**
     * @since cmark >= 1.0.0
     *
     * @link http://www.php.net/manual/en/class.commonmark-node-text.php
     */
    final class Text extends \CommonMark\Node
    {
        /**
         * Text Construction
         *
         * @param mixed|null $literal
         *
         * @since cmark >= 1.0.0
         *
         * @link http://www.php.net/manual/en/commonmark-node-text.construct.php
         */
        public function __construct($literal = null)
        {
        }
    }
}

namespace CommonMark\Node\Lists\Delimit {

    /**
     * @var int
     */
    const Paren = 2;

    /**
     * @var int
     */
    const Period = 1;
}

namespace CommonMark\Node\Text {

    /**
     * @since cmark >= 1.0.0
     *
     * @link http://www.php.net/manual/en/class.commonmark-node-text-strong.php
     */
    final class Strong extends \CommonMark\Node
    {
        public function __construct()
        {
        }
    }

    /**
     * @since cmark >= 1.0.0
     *
     * @link http://www.php.net/manual/en/class.commonmark-node-text-emphasis.php
     */
    final class Emphasis extends \CommonMark\Node
    {
        public function __construct()
        {
        }
    }
}

namespace CommonMark\Parser {

    /**
     * @var int
     */
    const Normal = 0;

    /**
     * @var int
     */
    const Normalize = 256;

    /**
     * @var int
     */
    const Smart = 1024;

    /**
     * @var int
     */
    const ValidateUTF8 = 512;
}

namespace CommonMark\Render {

    /**
     * @var int
     */
    const HardBreaks = 4;

    /**
     * @var int
     */
    const NoBreaks = 16;

    /**
     * @var int
     */
    const Normal = 0;

    /**
     * @var int
     */
    const Safe = 8;

    /**
     * @var int
     */
    const SourcePos = 2;

    /**
     * Rendering
     *
     * @param CommonMark\Node $node
     * @param mixed|null $options
     * @param mixed|null $width
     *
     * @return string
     *
     * @since cmark >= 1.0.0
     *
     * @link http://www.php.net/manual/en/function.commonmark-render-man.php
     */
    function Man($node, $options = null, $width = null): string
    {
    }

    /**
     * Rendering
     *
     * @param CommonMark\Node $node
     * @param mixed|null $options
     * @param mixed|null $width
     *
     * @return string
     *
     * @since cmark >= 1.0.0
     *
     * @link http://www.php.net/manual/en/function.commonmark-render-latex.php
     */
    function Latex($node, $options = null, $width = null): string
    {
    }

    /**
     * Rendering
     *
     * @param CommonMark\Node $node
     * @param mixed|null $options
     *
     * @return string
     *
     * @since cmark >= 1.0.0
     *
     * @link http://www.php.net/manual/en/function.commonmark-render-html.php
     */
    function HTML($node, $options = null): string
    {
    }

    /**
     * Rendering
     *
     * @param CommonMark\Node $node
     * @param mixed|null $options
     *
     * @return string
     *
     * @since cmark >= 1.0.0
     *
     * @link http://www.php.net/manual/en/function.commonmark-render-xml.php
     */
    function XML($node, $options = null): string
    {
    }
}
