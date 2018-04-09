<?php
// Start of extension: cmark
// - parsed on POSIX with PHP 7.2.4 (extension version 1.0.0)

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
         * @param int $options A mask of:
         *
         * @since cmark >= 1.0.0
         *
         * @link http://www.php.net/manual/en/commonmark-parser.construct.php
         */
        public function __construct(int $options = null)
        {
        }

        /**
         * Parsing
         *
         * @return \CommonMark\Node
         *
         * @since cmark >= 1.0.0
         *
         * @link http://www.php.net/manual/en/commonmark-parser.finish.php
         */
        public function finish(): \CommonMark\Node
        {
        }

        /**
         * Parsing
         *
         * @param string $buffer
         *
         * @return void
         *
         * @since cmark >= 1.0.0
         *
         * @link http://www.php.net/manual/en/commonmark-parser.parse.php
         */
        public function parse(string $buffer): void
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
    abstract /*final*/ class Node implements \CommonMark\Interfaces\IVisitable, \Traversable
    {
        /**
         * @var mixed
         */
        public $endColumn;

        /**
         * @var mixed
         */
        public $endLine;

        /**
         * @var mixed
         */
        public $firstChild;

        /**
         * @var mixed
         */
        public $lastChild;

        /**
         * @var mixed
         */
        public $next;

        /**
         * @var mixed
         */
        public $parent;

        /**
         * @var mixed
         */
        public $previous;

        /**
         * @var mixed
         */
        public $startColumn;

        /**
         * @var mixed
         */
        public $startLine;

        /**
         * Visitation
         *
         * @param \CommonMark\Interfaces\IVisitor $visitor An object implementing <code>CommonMark\Interfaces\IVisitor</code>
         *
         * @return void
         *
         * @since cmark >= 1.0.0
         *
         * @link http://www.php.net/manual/en/commonmark-node.accept.php
         */
        public function accept(\CommonMark\Interfaces\IVisitor $visitor): void
        {
        }

        /**
         * AST Manipulation
         *
         * @param \CommonMark\Node $child
         *
         * @return \CommonMark\Node
         *
         * @since cmark >= 1.0.0
         *
         * @link http://www.php.net/manual/en/commonmark-node.appendchild.php
         */
        public function appendChild(\CommonMark\Node $child): \CommonMark\Node
        {
        }

        /**
         * AST Manipulation
         *
         * @param \CommonMark\Node $sibling
         *
         * @return \CommonMark\Node
         *
         * @since cmark >= 1.0.0
         *
         * @link http://www.php.net/manual/en/commonmark-node.insertafter.php
         */
        public function insertAfter(\CommonMark\Node $sibling): \CommonMark\Node
        {
        }

        /**
         * AST Manipulation
         *
         * @param \CommonMark\Node $sibling
         *
         * @return \CommonMark\Node
         *
         * @since cmark >= 1.0.0
         *
         * @link http://www.php.net/manual/en/commonmark-node.insertbefore.php
         */
        public function insertBefore(\CommonMark\Node $sibling): \CommonMark\Node
        {
        }

        /**
         * AST Manipulation
         *
         * @param \CommonMark\Node $child
         *
         * @return \CommonMark\Node
         *
         * @since cmark >= 1.0.0
         *
         * @link http://www.php.net/manual/en/commonmark-node.prependchild.php
         */
        public function prependChild(\CommonMark\Node $child): \CommonMark\Node
        {
        }

        /**
         * AST Manipulation
         *
         * @param \CommonMark\Node $target
         *
         * @return \CommonMark\Node
         *
         * @since cmark >= 1.0.0
         *
         * @link http://www.php.net/manual/en/commonmark-node.replace.php
         */
        public function replace(\CommonMark\Node $target): \CommonMark\Node
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
        public function unlink(): void
        {
        }
    }

    /**
     * Rendering
     *
     * @param \CommonMark\Node $node
     * @param int $options A mask of:
     * @param int $width
     *
     * @return string
     *
     * @since cmark >= 1.0.0
     *
     * @link http://www.php.net/manual/en/function.commonmark-render.php
     */
    function Render(\CommonMark\Node $node, int $options = null, int $width = null): string
    {
    }

    /**
     * Parsing
     *
     * @param string $content markdown string
     * @param int $options A mask of:
     *
     * @return \CommonMark\Node Shall return root CommonMark\Node
     *
     * @since cmark >= 1.0.0
     *
     * @link http://www.php.net/manual/en/function.commonmark-parse.php
     */
    function Parse(string $content, int $options = null): \CommonMark\Node
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
         * @param \CommonMark\Interfaces\IVisitor $visitor An object implementing <code>CommonMark\Interfaces\IVisitor</code>
         *
         * @return void
         *
         * @since cmark >= 1.0.0
         *
         * @link http://www.php.net/manual/en/commonmark-interfaces-ivisitable.accept.php
         */
        public function accept(\CommonMark\Interfaces\IVisitor $visitor): void;
    }

    /**
     * @since cmark >= 1.0.0
     *
     * @link http://www.php.net/manual/en/class.commonmark-interfaces-ivisitor.php
     */
    interface IVisitor
    {
        /**
         * @var int
         */
        const Done = 1;

        /**
         * @var int
         */
        const Enter = 2;

        /**
         * @var int
         */
        const Leave = 3;

        /**
         * Visitation
         *
         * @param \CommonMark\Interfaces\IVisitable $visitable The current <code>CommonMark\Interfaces\IVisitable</code> being entered
         *
         * @since cmark >= 1.0.0
         *
         * @link http://www.php.net/manual/en/commonmark-interfaces-ivisitor.enter.php
         */
        public function enter(\CommonMark\Interfaces\IVisitable $visitable);

        /**
         * Visitation
         *
         * @param \CommonMark\Interfaces\IVisitable $visitable The current <code>CommonMark\Interfaces\IVisitable</code> being exited
         *
         * @since cmark >= 1.0.0
         *
         * @link http://www.php.net/manual/en/commonmark-interfaces-ivisitor.leave.php
         */
        public function leave(\CommonMark\Interfaces\IVisitable $visitable);
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
         * @var mixed
         */
        public $delimiter;

        /**
         * @var mixed
         */
        public $start;

        /**
         * @var mixed
         */
        public $tight;

        /**
         * OrderedList Construction
         *
         * @param mixed $tight
         * @param mixed $delimiter
         * @param mixed $start
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
         * @var mixed
         */
        public $delimiter;

        /**
         * @var mixed
         */
        public $tight;

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
    final class CodeBlock extends \CommonMark\Node\Text
    {
        /**
         * @var mixed
         */
        public $fence;

        /**
         * CodeBlock Construction
         *
         * @param string $fence
         * @param string $literal
         *
         * @since cmark >= 1.0.0
         *
         * @link http://www.php.net/manual/en/commonmark-node-codeblock.construct.php
         */
        public function __construct(string $fence = null, string $literal = null)
        {
        }
    }

    /**
     * @since cmark >= 1.0.0
     *
     * @link http://www.php.net/manual/en/class.commonmark-node-htmlblock.php
     */
    final class HTMLBlock extends \CommonMark\Node\Text
    {
        /**
         * @param mixed $literal
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
         * @var mixed
         */
        public $level;

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
    final class Code extends \CommonMark\Node\Text
    {
        /**
         * @param mixed $literal
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
    final class HTMLInline extends \CommonMark\Node\Text
    {
        /**
         * @param mixed $literal
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
        /**
         * @var mixed
         */
        public $onEnter;

        /**
         * @var mixed
         */
        public $onLeave;

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
         * @var mixed
         */
        public $title;

        /**
         * @var mixed
         */
        public $url;

        /**
         * Link Construction
         *
         * @param mixed $url
         * @param mixed $title
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
         * @var mixed
         */
        public $title;

        /**
         * @var mixed
         */
        public $url;

        /**
         * Image Construction
         *
         * @param mixed $url
         * @param mixed $title
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
        /**
         * @var mixed
         */
        public $onEnter;

        /**
         * @var mixed
         */
        public $onLeave;

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
    /*final*/ class Text extends \CommonMark\Node
    {
        /**
         * @var mixed
         */
        public $literal;

        /**
         * Text Construction
         *
         * @param mixed $literal
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
     * @param \CommonMark\Node $node
     * @param int $options A mask of:
     * @param int $width
     *
     * @return string
     *
     * @since cmark >= 1.0.0
     *
     * @link http://www.php.net/manual/en/function.commonmark-render-man.php
     */
    function Man(\CommonMark\Node $node, int $options = null, int $width = null): string
    {
    }

    /**
     * Rendering
     *
     * @param \CommonMark\Node $node
     * @param int $options A mask of:
     * @param int $width
     *
     * @return string
     *
     * @since cmark >= 1.0.0
     *
     * @link http://www.php.net/manual/en/function.commonmark-render-latex.php
     */
    function Latex(\CommonMark\Node $node, int $options = null, int $width = null): string
    {
    }

    /**
     * Rendering
     *
     * @param \CommonMark\Node $node
     * @param int $options A mask of:
     *
     * @return string
     *
     * @since cmark >= 1.0.0
     *
     * @link http://www.php.net/manual/en/function.commonmark-render-html.php
     */
    function HTML(\CommonMark\Node $node, int $options = null): string
    {
    }

    /**
     * Rendering
     *
     * @param \CommonMark\Node $node
     * @param int $options A mask of:
     *
     * @return string
     *
     * @since cmark >= 1.0.0
     *
     * @link http://www.php.net/manual/en/function.commonmark-render-xml.php
     */
    function XML(\CommonMark\Node $node, int $options = null): string
    {
    }
}
