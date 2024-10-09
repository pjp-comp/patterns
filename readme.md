Patterns for Generating Objects 

	1. The Singleton pattern: A special class that generates one—and only one—object instance

		The $instance property is private and static, so it cannot be accessed from outside the class. The getInstance() method has access, though. Because getInstance() is public and static, it can be called via the class from anywhere in a script:

		A static method cannot access object properties because it is, by definition, invoked in a class and not an object context. It can, however, access a static property. When getInstance() is called, I check the Preferences::$instance property. If it is empty, then I create an instance of the Preferences class and store it in the property. Then I return the instance to the calling code. Because the static  getInstance() method is part of the Preferences class, I have no problem instantiating a Preferences object, even though the constructor is private.

		Consequences

		So, how does the Singleton approach compare to using a global variable? First, the bad news. Both Singletons and global variables are prone to misuse. Because Singletons can be accessed from anywhere in a system, they can serve to create dependencies that can be hard to debug. Change a Singleton, and classes that use it may be affected. Dependencies are not a problem in themselves. After all, we create a dependency every time we declare that a method requires an argument of a particular type. The problem is that the global nature of the Singleton lets a programmer bypass the lines of communication defined by class interfaces. When a Singleton is used, the dependency is hidden away inside a method and not declared in its signature. This can make it harder to trace the relationships within a system. Singleton classes should therefore be deployed sparingly and with care. 

		Nevertheless, I think that moderate use of the Singleton pattern can improve the design of a system, saving you from horrible contortions as you pass objects unnecessarily around your system.

		Singletons represent an improvement over global variables in an object-oriented context. You cannot overwrite a Singleton with the wrong kind of data.