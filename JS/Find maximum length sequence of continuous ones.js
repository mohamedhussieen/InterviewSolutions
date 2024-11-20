function findIndexToReplace(arr) {
    let maxLength = 0, maxIndex = -1;
    let zeroCount = 0, left = 0;
    for (let right = 0; right < arr.length; right++) {
        if (arr[right] === 0) zeroCount++;
        while (zeroCount > 1) {
            if (arr[left] === 0) zeroCount--;
            left++;
        }
        if (right - left + 1 > maxLength) {
            maxLength = right - left + 1;
            maxIndex = arr[right] === 0 ? right : maxIndex;
        }
    }
    return maxIndex;
}
// Example input
const binaryArray = [0, 0, 1, 0, 1, 1, 1, 0, 1, 1];
const result = findIndexToReplace(binaryArray);
console.log(`Index to replace: ${result}`);
