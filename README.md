# silverstripe/core PoC

This package is a PoC of what a split out silverstripe/core might looks like.

**It will be deleted at some point in the future and should not be used in projects.**

## Contents

It mostly contains the contents of framework/src/Core, including:

 * A file manifest system, with build in support for module and class manifests
   * A file finder support class (previously in silverstripe/assets)
 * Injector: A service locator for dependency injection
 * A configuration system easily tied to classes that uses private statics as its default
 * Environment management, including env vars and a dev/test/live swtich
 * A Kernel that can be used to initialise all of the above
 * Caching services based on PSR-15 and symfony/cache
 * Mechanisms for flushing internal state cached to the filesystem
 * A base class, ViewableData that's provides some support to DataObject (previously in src/View)

It also contains a minimal segment of framework/src/Dev, to get its tests passing:

 * SapphireTest
 * TestState and a number of plugins
 * Deprecation
 * TestKernel
 * The TestOnly interface