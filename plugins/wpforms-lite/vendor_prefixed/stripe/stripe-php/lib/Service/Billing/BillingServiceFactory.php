<?php

// File generated from our OpenAPI spec
namespace WPForms\Vendor\Stripe\Service\Billing;

/**
 * Service factory class for API resources in the Billing namespace.
 *
 * @property AlertService $alerts
 * @property MeterEventAdjustmentService $meterEventAdjustments
 * @property MeterEventService $meterEvents
 * @property MeterService $meters
 */
class BillingServiceFactory extends \WPForms\Vendor\Stripe\Service\AbstractServiceFactory
{
    /**
     * @var array<string, string>
     */
    private static $classMap = ['alerts' => AlertService::class, 'meterEventAdjustments' => MeterEventAdjustmentService::class, 'meterEvents' => MeterEventService::class, 'meters' => MeterService::class];
    protected function getServiceClass($name)
    {
        return \array_key_exists($name, self::$classMap) ? self::$classMap[$name] : null;
    }
}
