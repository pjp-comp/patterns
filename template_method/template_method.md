# The Template Method Pattern

It is a behavioral design pattern that defines the skeleton (or structure) of an algorithm in a base class but allows subclasses to override or modify specific steps of the algorithm (code/functional implementation) without changing its overall structure.

In simpler terms, you have a base class with a method that outlines the steps to do something. Some of these steps are implemented in the base class, while others are left for the child classes to implement or modify. This allows different subclasses to have their own specific behavior but still follow the same general process.

> Why Use It?

**Code Reusability:** You can reuse the general algorithm in the base class without duplicating code in subclasses.

**Flexibility:** Subclasses can change specific parts of the algorithm without affecting the overall process.

> Key Concepts:

**Template Method:** This method defines the steps of the algorithm. Some of these steps are implemented in the base class, while others are left abstract or empty so that subclasses can provide their own implementation.

**Abstract Methods:** These are methods that subclasses must implement.

**Hook Methods (optional):** These are methods that subclasses can override if they want to, but it's not mandatory.

> Example in PHP

Let's say you are creating a system that generates reports in different formats (HTML and PDF). The overall process is the same:

- Fetch the data.
- Format the report.
- Output the result.

But how the report is formatted (HTML or PDF) can differ.