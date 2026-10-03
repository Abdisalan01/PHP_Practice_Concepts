# Week 3 — Chapter 3: Arrays and Functions in PHP

This week we learn how to store **many values in one variable** (arrays) and how to put code in a **reusable block** (functions). We also learn about variable scope and how to include one PHP file in another.

📄 **[index.php](index.php)** — all the code of this chapter in one file (16 small examples)
📄 **[library.php](library.php)** — small function library used by the *include* example
📁 **[Screen_Shot](Screen_Shot/)** — one picture per topic (code + output), plus a [README](Screen_Shot/README.md) that explains the code.

---

# Part A — Arrays

## 1. What is an array?

- An **array** is a variable that holds **many values** under **one name**.
- Each value is called an **element**.
- Each element has a **key** (also called **index**). The key can be a **number** or a **string**.
- One array can hold **different data types** (text, numbers, …).
- You can put arrays **inside** other arrays (2D, 3D, …).
- `var_dump()` shows the **size, type and value** of a variable.

## 2. Types of arrays

| Type | Key | Example |
|---|---|---|
| **Numerically indexed** | Numbers (start at **0**) | `$fruits[0]` |
| **Associative** | Strings (names) | `$info["name"]` |
| **Multidimensional** | Array inside array | `$student[1][0]` |

---

## 3. Numerically indexed arrays

Create an empty array:
```php
$theVar = array();
```

Three ways to fill it:
```php
// 1. Automatic index (starts at 0)
$fruits = array("Apple", "Orange", "Banana");

// 2. Manual index
$fruits[0] = "Apple";
$fruits[1] = "Orange";

// 3. No index — PHP adds to the end
$fruits[] = "Apple";
$fruits[] = "Orange";
```

Show the whole array clearly:
```php
echo "<pre>";
print_r($fruits);
echo "</pre>";
```
`<pre>` keeps spaces and new lines, so `print_r()` looks clean in the browser.

### Loop with `for`
```php
for ($i = 0; $i < count($info); $i++)
    echo $info[$i] . "<br>";
```
`count()` gives the number of elements.

---

## 4. The `foreach ... as` loop

`foreach` is the easiest way to go through an array. It starts at the first element and ends at the last.

```php
foreach ($numbers as $n)
    echo "$n, ";
```
- `$numbers` — the array
- `$n` — holds the **current element** on each round

---

## 5. Associative arrays

- The keys are **names**, not numbers.
- Good for **name / value pairs**.
- You **must** give a key. Use **quotes** around string keys.
- Use the **double arrow `=>`** to connect a key to a value.
- `$_GET`, `$_POST`, `$_REQUEST`, `$_FILES` are associative arrays.

```php
$info = array(
    "id"   => "101",
    "name" => "Mohamed Abdi Ali",
    "age"  => 20
);
echo $info["name"];
```

Get both key and value in a loop:
```php
foreach ($info as $k => $v)
    echo "[$k]: $v<br>";
```

---

## 6. Multidimensional arrays

- An array that contains **other arrays**.
- A **2D array** is like a **table** (rows and columns).
- You need **two indexes** to get one element: `$student[row][column]`.

```php
$student = array(
    array("Mohamed", 1990, "Hodan",     "0608124390"),
    array("Ahmed",   2001, "Yaaqshiid", "0608124391"),
);
echo $student[1][0];   // Ahmed
```

---

## 7. Array functions

| Function | What it does |
|---|---|
| `is_array($a)` | Is it an array? (true/false) |
| `in_array($value, $a)` | Is this value in the array? |
| `count($a)` / `sizeof($a)` | Number of elements |
| `sort($a)` | Sort **ascending** (small → big) |
| `rsort($a)` | Sort **descending** (big → small) |
| `asort($a)` | Sort associative array by **value**, ascending |
| `arsort($a)` | Sort associative array by **value**, descending |
| `max($a)` / `min($a)` | Highest / lowest value |
| `implode(", ", $a)` | Array → **string** |
| `explode(" ", $str)` | String → **array** |
| `shuffle($a)` | Put elements in **random** order |
| `array_merge($a1, $a2)` | Join arrays into one |
| `array_reverse($a)` | Reverse the order |
| `array_push($a, $v)` | Add to the **end**; returns new count |
| `array_pop($a)` | Remove the **last** element and return it |
| `end($a)` | Return the **last** element |

---

# Part B — Functions

## 8. What is a function?

- A **function** is a named block of code that does **one task**.
- It can **take input** (arguments) and can **return** a value.
- A function does **not run by itself**. It runs only when you **call** it.
- PHP has **more than 1000 built-in functions**.

### Why use functions?
- Less typing and less code.
- Fewer mistakes.
- Faster loading and running (compiled once).
- Can work for general and specific cases (using arguments).
- **Reusable**: write once, call many times.

## 9. Defining and calling a function

```php
function function_name($parameter1, $parameter2) {
    // statements
}

function_name(5, 10);   // call
```
- Starts with the word **`function`**.
- The name starts with a **letter or `_`**.
- **Brackets `()` are required**, parameters are optional.
- Function names are **not case-sensitive**.
- The body is inside **curly braces `{ }`**.

## 10. Parameters vs arguments

| Parameter | Argument |
|---|---|
| The **placeholder** in the function definition | The **real value** you send when calling |
| `function factorial($a)` → `$a` | `factorial(5)` → `5` |

## 11. Returning a value

- `return` sends a value **back** to the caller.
- After `return`, the function **stops**. Code after it will not run.
```php
$a = factorial(5);      // save in a variable
echo factorial(5);      // or use it directly
```
- A function can return an **array**. This is a way to get **many values** back.

## 12. Passing by value vs by reference

| By value (default) | By reference (`&`) |
|---|---|
| The function gets a **copy** | The function gets the **original** |
| The original variable **does not change** | The original variable **changes** |
| `function f($x)` | `function f(&$x)` |

⚠️ Passing by reference can cause **hard-to-find bugs** and security risks, so use it carefully.

## 13. Default argument value

```php
function factorial($a = 5) { ... }
factorial();    // uses 5
```

## 14. Scope of variables

**Scope** = the part of the code where a variable can be used.

| Type | Where it lives |
|---|---|
| **Local** | Made **inside** a function — used only inside that function |
| **Global** | Made **outside** functions — used outside functions |
| **Static** | Inside a function, but **keeps its value** between calls |

To use a global variable **inside** a function:
```php
global $a;            // way 1
echo $GLOBALS["a"];   // way 2
```

### Superglobals
Built-in variables that work **everywhere**: `$_GET`, `$_POST`, `$_SESSION`, `$_FILES`, `$_SERVER`, `$GLOBALS`.

👉 Tip: make most variables **local**. Use global only when many functions need the same data.

---

## 15. Including files

You can put shared code (functions, header, footer, menu) in one file and **include** it in other files.

| Statement | If the file is missing | Loads the file |
|---|---|---|
| `include` | **Warning** — script continues | Every time |
| `include_once` | Warning — script continues | Only once |
| `require` | **Fatal error** — script stops | Every time |
| `require_once` | Fatal error — script stops | Only once |

👉 When the file is **very important**, use **`require_once`**.

### Check if a function exists
```php
if (function_exists("factorial"))
    echo "This function exists";
```

### Paths
`../abc/include.php` — `../` means "go **one folder up**" from the current folder (a **relative path**).
Be careful: a full path on your computer may be different on the live server.

---

## Quick summary

- Arrays hold many values: **indexed** (numbers), **associative** (names), **multidimensional** (arrays inside arrays).
- Use `foreach` to loop over arrays; use `=>` to get the key and the value.
- Functions are reusable blocks; **parameters** receive **arguments**; `return` sends a value back.
- By value = copy; by reference (`&`) = original.
- Local vs global scope; use `global` or `$GLOBALS` inside functions.
- `include` gives a warning, `require` stops the script.
