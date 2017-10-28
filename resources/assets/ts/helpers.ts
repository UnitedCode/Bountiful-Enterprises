
/**
 * A wrapper for the querySelector method
 *
 * @param selector Selector to query
 * @param scope Scope of query. Ff left null, will scope to document
 */
export function qs(selector: string, scope?: Element): Element
{
    return <Element>(scope || document).querySelector(selector);
}

/**
 * A wrapper for the querySelectorAll method
 *
 * @param selector Selector to query
 * @param scope Scope of query. Ff left null, will scope to document
 */
export function qsa(selector: string, scope: Element)
{
    const elements = (scope || document).querySelectorAll(selector);
    let elementsArr = []

    for(let i = 0; i < elements.length; i++) {
        elementsArr[i] = elements[i];
    }

    return elementsArr;
}

/**
 * A wrapper for addEventListener
 *
 * @param target The element to add the event listener to
 * @param type Type of event to listen for
 * @param callback Function to run once the event is fired
 * */
export function $on(target: Element|Window, type: string, callback: EventListenerOrEventListenerObject)
{
    target.addEventListener(type, callback);
}

/**
 * Checks if a string(query) is contained in another string(str)
 *
 * @param str The string to search through
 * @param query What you are trying to find in str
 * */
export function includes(str: string, query:string) : boolean
{
    return str.indexOf(query) != -1;
}