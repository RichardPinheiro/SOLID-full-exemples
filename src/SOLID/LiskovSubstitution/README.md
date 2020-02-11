Liskov Substitution Principle (LSP)
=====

The definition of the LSP that was created by Barbara Liskov in 1988 (hence the name) states
that "Derived classes should be able to be replaced by their base classes".


“If for each o1 object of type S there is an o2 object of type T so that, for all P programs defined in
terms of T, the behavior of P is unchanged when o1 is replaced by o2 so S is a subtype of T ”


* To meet the LSP, it means that the derived classes are completely replaceable by their base classes, that is,
all code that uses the base class will be able to meet the LSP.