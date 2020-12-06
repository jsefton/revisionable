# Revisionable
A revision log is made when anything is changed and saved to the database inside the `revisions` table. It stores the original value and the current value upon a model being saved.

This can be used on any model. To enable it add the `Revisionable` trait.

```php
use Revisionable\Revisionable;
class Post
{
    use Revisionable;
}
```
