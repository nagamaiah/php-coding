<?php

namespace Vendor\Package;

use FooClass;
use BarClass as Bar;
use OtherVendor\OtherPackage\BazClass;

class ClassName extends ParentClass implements Men, Women
{
	protected static $foo;

	public function __construct(
	    Context $context,
	    Session $customerSession,
	    ScopeConfigInterface $scopeConfig,
	    StoreManagerInterface $storeManager,
	    CustomerRepository $customerRepository,
	    Validator $formKeyValidator = null
	) {
	    $this->session = $customerSession;
	    $this->scopeConfig = $scopeConfig;
	    $this->storeManager = $storeManager;
	    $this->customerRepository = $customerRepository;
	    parent::__construct($context);
	}

    public function fooBarBaz(int $arg1, &$arg2, $arg3 = [], $arg4 = null)
    {
        switch ($expr) {
		    case 0:
		        echo 'First case, with a break';
		        break;
		    case 1:
		        echo 'Second case, which falls through';
		        // no break
		    case 2:
		    case 3:
		    case 4:
		        echo 'Third case, return instead of break';
		        return;
		    default:
		        echo 'Default case';
		        break;
		}

		for ($i = 0; $i < 10; $i++) {
		    // for body
		}

    }

    public function getCustomerManagementDetailsArrayList(
        ClassTypeHint $arg1,
        $arg2 = null,
        array $data = []
    ) {
    	if ($condition_goes_here) {
    		foreach ($lists as $keys => $values) {
    			//perform operation
    		}
    	} elseif (!$checked) {
    		return 'abcfgh';
    	} else {
    		return 'abccc';
    	}

    	try {
		    // try body
		} catch (FirstThrowableType $e) {
		    // catch body
		} catch (OtherThrowableType | AnotherThrowableType $e) {
		    // catch body
		} finally {
		    // finally body
		}

		$variable = $foo ? 'foo' : 'bar';
		$variable = $foo ?: 'bar';
    }

    public function functionName(int $arg1, $arg2): string
    {
        return 'foo';
    }

    public function anotherFunction(
        string $foo,
        string $bar,
        int $baz
    ): string {
        return 'foo';
    }

    final public static function bar()
    {
        // the abstract and final declarations MUST precede the visibility declaration.
        do {
		    // structure body;
		} while ($expr);
    }

}
