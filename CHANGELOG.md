# 0.19.2

- Updated doc-block comments (https://github.com/abellion/xenus/pull/9)
- Connect document copies with their original collection (https://github.com/abellion/xenus/pull/10)

# 0.19.1

This release prevents `null` values from being considered as undefined in a `Xenus\Document`.

# 0.19

- Support PHP 8.1

# 0.18

- Bump minimum PHP version to `^7.1`.
- Support PHP 8.

# 0.17.1

This release fixes an issue when the `display_errors` configuration of PHP is turned on.

# 0.17

Events have landed ! Check out the [documentation](https://abellion.github.io/xenus/) for more informations.

- The protected property `parameters` of the `Xenus\Collection` class has been renamed to `configuration`.
- The `Xenus\CollectionParameters` class has been renamed to `Xenus\CollectionConfiguration`.
- A collection can now be resolved by relationships using an implementation of the `Xenus\CollectionResolver` interface.

# 0.16

- The `Xenus\Collection` class now takes a `Xenus\Connection` as its first argument. Read https://abellion.github.io/xenus/#/?id=first-steps to know more.
- The `Xenus\Document` class now contains a `__sleep()` method.

# 0.15

- The `Xenus\Concerns\HasRelationships` `build` method is now protected.
- The `Xenus\Support\Transform::collection()` method now preserves the given collection's keys.

# 0.14

- Added a `count()` method to `hasMany` and `belongsToMany` relationships.

# 0.13

- Added a `findOne()` method to `hasMany` and `belongsToMany` relationships.
- Added a `distinct()` method to `hasMany` and `belongsToMany` relationships.

# 0.12

- The `Xenus\Collection` constant properties `NAME` and `DOCUMENT` became protected properties.
- The way relationships are loaded can be customized via the `resolve()` method of the `Xenus\Collection` class.

# 0.11.1

This release fixes a bug on case sensitive filesystems.

# 0.11

Relationships have landed ! Check out the [documentation](https://abellion.github.io/xenus/) for more informations.

- The `Xenus\Collection` protected properties `name` and `document` became constant properties.
- The `Xenus\Collection` class is no longer `abstract`. You can instantiate it by giving an array of options as a second argument.
- All of the `Xenus\Collection` methods returning a MongoDB Cursor now return a `Xenus\Cursor` having the same methods as the original cursor.
- The `Xenus\Document` now provides accessors for an `_id` property.

# 0.10

- The `Xenus\Document::embed()` method has been removed. Use the `Xenus\Support\Embed` utility instead.
- The `Xenus\Support\Embed` utility has been added.
- The `Xenus\Support\Transform` utility has been added.

# 0.9

- The `Xenus\Collection` class now ineriths from the `MongoDB\Collection` class.
- The `Xenus\Collection\CRUDMethods` has been removed and its methods have moved into the `Xenus\Collection` class.
- The `Xenus\Collection::findOne()`, `Xenus\Collection::updateOne()`, `Xenus\Collection::deleteOne()` and `Xenus\Collection::replaceOne()` methods can take a `MongoDB\BSON\ObjectID` as a filter argument.
- The `Xenus\Document` type hint has been removed from the  `Xenus\Collection::insert()`, `Xenus\Collection::update()` and `Xenus\Collection::delete()` methods.

# 0.8

- The `Xenus\Document::get()` method can take as a second argument the default value to give in case the given key doesn't exist within the document.

# 0.7.2

- The `Xenus\Document::with()` no longer includes the `_id` field by default.
- The `Xenus\Document::without()` no longer includes the `_id` field by default.

# 0.7.1

- The `Xenus\Document::with()` method now returns the higher document's instance.
- The `Xenus\Document::without()` method now returns the higher document's instance.

# 0.7

- The `Xenus\Document` has two new methods : `with()` and `without()`.
- The `Xenus\Collection::select()` method has been renamed to `find()`.

# 0.6.1

This release add documentation blocks on top of the library methods.

# 0.6

- The `Xenus\Document` has a new `merge()` method, used to fill the document's values.

# 0.5

- The `Xenus/Document/Serializers/HttpSerializer` methods have been removed.
- The `Xenus/Document/Serializers/DefaultSerializer` methods have been removed.
- The `Xenus\Document::toArray()` is the preferred way to serialize a document's properties.
