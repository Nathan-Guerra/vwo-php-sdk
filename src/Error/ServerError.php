<?php
/**
 * This file has code referenced from "bigcommerce-api-php" project, under MIT License
 *
 *  Published name: bigcommerce-api-php
 *  URL: https://github.com/bigcommerce/bigcommerce-api-php/blob/master/src/Bigcommerce/Api/ServerError.php
 *  Description: PHP client for connecting to the Bigcommerce V2 REST API.
 *  Authors: Bigcommerce
 *  License: MIT License
 *
 *  Copyright (C) Bigcommerce, 2019.
 *  All rights reserved.
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 */
namespace vwo\Error;

/**
 * Raised when a server error (500+) is returned from the API.
 */
class ServerError extends Error
{
}
