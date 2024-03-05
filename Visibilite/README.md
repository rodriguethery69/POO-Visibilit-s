Les différentes visibilités


Il existe 3 visibilités pour nos propriétés et méthodes :


    public : la propriété ou la méthode pourront être accédés depuis l'intérieur et l'extérieur de la classe

    private : l'accès à la propriété ou la méthode est possible uniquement depuis l'intérieur de la classe

    protected : équivalent à private mais accessible également dans les classes héritées


Private et Protected


Nous allons traiter des visibilités "private" et "protected" simultanément, leur fonctionnement étant identique.

Si nous passons les proppriétés "titulaire" et "solde" en private, il ne sera plus possible de les modifier ni d'y accéder directement.


Les constantes

On n'en parle pas énormément mais il arrive souvent d'avoir besoin de valeurs constantes dans nos classes.


Les accesseurs

Afin de pouvoir définir et lire nos propriétés en "private", nous allons créer des "accesseurs", méthodes permettant d'y accéder.


Les getters

Les "getters" sont des méthodes permettant de lire les propriétés privées.

La convention veut que la méthode s'appelle "getPropriete" où "Propriete" est à remplacer par le nom de la propriété concernée. Nous aurons donc "getSolde" et "getTitulaire" dans notre cas.

Les setters

Les "setters" permettent de définir la valeur des propriétés privées. Faire un "setter" permet, par exemple, de s'assurer que la valeur stockée dans la propriété est cohérente avec ce qui est prévu.

La convention veut que la méthode s'appelle "setPropriete" où "Propriete" est à remplacer par le nom de la propriété concernée. Nous aurons donc "setSolde" et "setTitulaire" dans notre cas.


