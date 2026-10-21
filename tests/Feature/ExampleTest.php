<?php

<<<<<<< HEAD
test('the application returns a successful response', function () {
=======
it('returns a successful response', function () {
>>>>>>> windows
    $response = $this->get('/');

    $response->assertStatus(200);
});
