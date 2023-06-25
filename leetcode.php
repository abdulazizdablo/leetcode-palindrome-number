class Solution {

    /**
     * @param Integer $x
     * @return Boolean
     */
    function isPalindrome($x) {


        if(strrev($x) == $x)
        {
            return true;
        }

        else
        return false;
        
    }
}
