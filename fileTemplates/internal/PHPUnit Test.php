<?php
## parse("PHP File Header.php")

#if (${NAMESPACE})
namespace Tests\Unit\\${NAMESPACE};
#end

#if (${NAMESPACE} && !${TESTED_NAMESPACE})
use ${TESTED_NAME};
#elseif (${TESTED_NAMESPACE} && ${NAMESPACE} != ${TESTED_NAMESPACE})
use ${TESTED_NAMESPACE}\\${TESTED_NAME};
#end
use Tests\TestCase;

class ${NAME} extends#if(${NAMESPACE}) TestCase #else \TestCase #end
{
    /**
     * @inheritdoc
     */
    public function setUp(): void
    {
        parent::setUp();
    }

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest(): void
    {
        $this->assertTrue(true);
    }
    
    /**
     * @inheritdoc
     */
    public function tearDown(): void
    {
        parent::tearDown();
    }
}
