# Adapter (Also known as: Wrapper) 
[source](https://refactoring.guru/design-patterns/adapter)

> Adapter is a structural design pattern, which allows incompatible objects to collaborate

## Problem:

Imagine that you’re creating a stock market monitoring app. The app downloads the stock data from multiple sources in XML format and then displays nice-looking charts and diagrams for the user.

At some point, you decide to improve the app by integrating a smart 3rd-party analytics library. But there’s a catch: the analytics library only works with data in JSON format.

You could change the library to work with XML. However, this might break some existing code that relies on the library. 
And worse, you might not have access to the library’s source code in the first place, making this approach impossible.

## Solution

You can create an adapter. This is a special object that converts the interface of one object so that another object can understand it.



> The adapter gets an interface, compatible with one of the existing objects.

> Using this interface, the existing object can safely call the adapter’s methods.

> Upon receiving a call, the adapter passes the request to the second object, but in a format and order that the second object expects.