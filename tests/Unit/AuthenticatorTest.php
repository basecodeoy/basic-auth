<?php declare(strict_types=1);

/**
 * Copyright (C) BaseCode Oy - All Rights Reserved
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

namespace Tests\Unit;

it('should verify valid credentials', function (): void {
    expect(getAuthenticator()->verify('user', 'password'))->toBeTrue();
});

it('should fail to verify invalid credentials', function (): void {
    expect(getAuthenticator()->verify('unauthorized', 'unauthorized'))->toBeFalse();
});

it('should fail to verify empty credentials', function (): void {
    expect(getAuthenticator()->verify(null, null))->toBeFalse();
    expect(getAuthenticator()->verify('', ''))->toBeFalse();
});
