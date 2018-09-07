The Avatar Extension
====================

This Twig extension generates user avatar using name initials letter inside Twig templates. Based on [yohang88/letter-avatar
](https://github.com/yohang88/letter-avatar)

* ``avatar``

Install
-------

Via Composer

``` bash
$ composer require olivers/twig-avatar-extension
```

Showing avatar based on user complete name
-------------------------------------------

Use the ``avatar`` function to generate user avatar.

    {% set userCompleteName = 'John Doe' %}
    <img src="{{ avatar(userCompleteName, '', 64) }}" />

This example would output avatar with two initials letter like ``JD``, as ``John Doe`` is the providen user name.

![alt Avatar examples](https://cloud.githubusercontent.com/assets/618412/12192012/835c7488-b60d-11e5-9276-d06f42d11a86.png)
