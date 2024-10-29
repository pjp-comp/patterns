𝗛𝗼𝘄 𝘁𝗼 𝘀𝗲𝗹𝗲𝗰𝘁 𝗗𝗲𝘀𝗶𝗴𝗻 𝗣𝗮𝘁𝘁𝗲𝗿𝗻?

Choosing the correct design pattern in software engineering is critical to practical problem-solving. This guide simplifies the process, helping you decide between patterns based on specific needs. It offers concise descriptions and valuable use cases for each pattern, making understanding and applying them in real-world scenarios easier. 

To select a pattern, we must first go through the problem identification. If the problem is related to:

 🔸 Object Creation? → Creational Patterns

 🔸 Object Assembly? → Structural Patterns

 🔸 Object Interactions? → Behavioral Patterns

So, let's dive in.

𝟭. 𝗖𝗿𝗲𝗮𝘁𝗶𝗼𝗻𝗮𝗹 𝗣𝗮𝘁𝘁𝗲𝗿𝗻𝘀

 🔹 [Singleton](./singleton/adapter.md): Use when a single instance of a class is needed. Some examples are logging and database connections. 

 🔹 Factory Method: Decouple object creation from usage. For example, you create different types of database connections based on configuration.

 🔹 Abstract Factory: Create families of related objects. For example, I build parsers for different file formats (e.g., JSON, XML, CSV).

 🔹 Builder: Constructing complex objects step by step. For example, if you need to create a complex domain object.

 🔹 Prototype: Creating duplicate objects and reusing cached objects to reduce database calls.

𝟮. 𝗦𝘁𝗿𝘂𝗰𝘁𝘂𝗿𝗮𝗹 𝗣𝗮𝘁𝘁𝗲𝗿𝗻𝘀

 🔹 [Adapter]((./adapter/adapter.md)): Make incompatible interfaces compatible. For example, it integrates a new logging library into an existing system that expects a different interface.

 🔹 Composite: Represent part-whole hierarchies. For example, graphic objects in a drawing application can be grouped and treated uniformly

 🔹 Proxy: Control access to objects. For example, lazy loading of a high-resolution image in a web application.

 🔹 Decorator: Dynamically add/remove behavior. For example, we are implementing compression or encryption on top of file streams.

 🔹 Bridge: Decouple abstraction from implementation. For example, I am separating platform-specific code from core logic.

𝟯. 𝗕𝗲𝗵𝗮𝘃𝗶𝗼𝗿𝗮𝗹 𝗣𝗮𝘁𝘁𝗲𝗿𝗻𝘀

 🔹 Strategy: Define a family of algorithms. These algorithms allow users to choose different sorting or compression algorithms.

 🔹 Observer: Maintain a consistent state by being notified of changes and, for example, notifying subscribers of events in a messaging system.

 🔹 Command: Encapsulate a request as an object. For example, I implement undo/redo functionality in text or image editor.

 🔹 State: Encapsulate state-specific behavior. For example, we are handling different states of a user interface element (e.g., enabled, disabled, selected).

 🔹 [Template Method]((./template_method/template_method.md)): Define the skeleton of an algorithm in operation, deferring some steps to subclasses and implementing a base class for unit testing with customizable setup and teardown steps.

Ultimately, we came up with the pattern we needed for our problem. 

[Source](https://www.linkedin.com/posts/milanmilanovic_technology-softwareengineering-programming-activity-7256934040459468800-X_7R?utm_source=share&utm_medium=member_desktop) 

------------

> [SOLID Principle with PHP](./solid/readme.md)

