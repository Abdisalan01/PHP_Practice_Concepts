# Week 2 — Chapter 2: PHP Fundamentals & Control Structures

This week we learn the basic building blocks of PHP: how to write PHP, show output, use variables, data types, constants and operators. Then we learn how to make **decisions** (if, switch) and how to **repeat** code (loops).


---

## 1. PHP syntax and statements

- PHP files end with **`.php`**. When the server sees `.php`, it sends the file to the PHP processor.
- A PHP file can have three things: **text**, **HTML code**, and **PHP code**.
- Save PHP files inside the server root folder: **`C:\xampp\htdocs`** (or `C:\wamp\www`).
- PHP code starts with **`<?php`** and ends with **`?>`**.
- Every PHP statement ends with a **semicolon `;`**.
- You can put HTML tags inside `echo`/`print`. Use **single quotes** for HTML attributes inside them.

```php
<?php
    print "HELLO WORLD PHP!!! ";
?>
```

---

## 2. Output: `echo` and `print`

Both show text in the browser. They are **constructs** (built-in language features, not normal functions), so brackets `()` are optional.

| `echo` | `print` |
|---|---|
| Does **not** return a value | **Returns** a value (1) |
| A little **faster** | A little slower |
| Can take **many** parameters: `echo "a", "b";` | Takes **one** parameter only |
| Can **not** be used inside a ternary | **Can** be used inside a ternary |

```php
echo "Hello World!", " Yahye Ali Isse";          // ok
print "Using print with ", "two parameters";     // error
($x < $y) ? print "$x is less" : print "$x is greater";  // ok
```

---

## 3. Single quotes vs double quotes

| Code | Output | Why |
|---|---|---|
| `echo 'Hellow $a';` | `Hellow $a` | Single quotes print the text **exactly as it is** |
| `echo "Hellow $a";` | `Hellow 10` | Double quotes **replace the variable** with its value |

---

## 4. Comments

Comments are notes for people. PHP ignores them.

```php
// single line comment
#  also a single line comment
/* multi-line
   comment */
```

---

## 5. Variables

- A **variable** is a place in memory that stores a value.
- In PHP, every variable starts with **`$`**.
- You do **not** need to declare the type. A variable can change its type.

### Naming rules
- Must start with a **letter** or **underscore `_`** (after the `$`).
- Can contain only **letters, numbers and `_`**.
- **No spaces**.
- Variable names are **case-sensitive**: `$name` and `$NAME` are different.
- Keywords (`if`, `echo`, …) and function names are **not** case-sensitive.
- Using keywords as variable names is a bad practice.

### Naming styles for many words
| Style | Example | Allowed? |
|---|---|---|
| Snake case | `$user_name` | ✅ |
| Camel case | `$userName` | ✅ |
| Pascal case | `$UserName` | ✅ |
| Kebab case | `$user-name` | ❌ |

---

## 6. Data types

| Type | Example |
|---|---|
| Integer | `20` |
| Float (real number) | `160.5` |
| String (text) | `"Hello"` |
| Boolean | `true` / `false` |

### Strings
A string is text inside `'single'` or `"double"` quotes.
- `strlen($str)` → number of **characters** (`'Welcome to PHP Republic'` → 23)
- `str_word_count($str)` → number of **words** (→ 4)

---

## 7. Constants

- A constant is like a variable, but its value **can not change**.
- **No `$` sign**.
- Create it with **`define()`**.
- Good practice: use **UPPERCASE** names.

```php
define("PI", 3.14);
echo "Value of PI is: ", PI;
```

---

## 8. Operators

| Group | Operators |
|---|---|
| Assignment | `=` |
| Arithmetic | `+  -  *  /  %` |
| Arithmetic assignment | `+=  -=  *=  /=  %=` |
| Comparison | `<  <=  >  >=  ==  !=` |
| Logical | `&&  ||  !` |
| Concatenation (join text) | `.` |
| Increment / decrement | `++  --` |
| Ternary | `? :` |

### Number of operands
- **Unary** — one operand: `$a++`, `!$a`
- **Binary** — two operands: `$a + $b`
- **Ternary** — three operands: `expr ? x : y`

### Operator precedence (high → low)
`()` → `++ --` → `!` → `* / %` → `+ - .` → `< <= > >=` → `== !=` → `&&` → `||` → `= += -= ...` → `and` → `or`

---

## 9. Control structures

| Type | Meaning |
|---|---|
| **Sequential** (default) | Statements run one after another, in order |
| **Conditional** | Run or skip code based on a condition |
| **Loop** | Repeat code many times |

---

## 10. Conditional statements

### `if`
```php
if ($month == "March")
    echo "It's springtime";
```

### `if ... else`
```php
if ($marks >= 50) echo "Pass";
else              echo "Not pass";
```

### `if ... elseif ... else`
Checks many conditions, one by one. (`else if` is also fine.)
```php
if ($marks >= 90)      echo "Excellent";
elseif ($marks >= 80)  echo "Very good";
elseif ($marks >= 50)  echo "minimal pass";
else                   echo "not pass";
```

### `switch`
Compares one value with many `case`s.
- `break` stops the switch.
- `default` runs when no case matches. It must be **last**.

### Ternary operator `? :`
A short form of `if ... else`:
```php
echo $fuel <= 1 ? "Fill tank now" : "There's enough fuel";
```

---

## 11. Loops

Every loop has 4 parts:
1. A **loop variable** (counter)
2. A **start value**
3. A **condition** to continue
4. A **step** (increment `++` or decrement `--`)

| Loop | When to use |
|---|---|
| `while` | Repeat **while** a condition is true (checks first) |
| `do...while` | Runs **at least once**, then checks the condition at the end |
| `for` | Repeat a **known number** of times |
| `foreach` | Go through **each element of an array** (Week 3) |

### `break` and `continue`
- **`break`** — stop the loop completely.
- **`continue`** — skip this round and go to the next one.

### Nested loops
A loop **inside** another loop. Example: a multiplication table (outer loop = rows, inner loop = columns).

---

## Quick summary

- PHP code goes between `<?php` and `?>`; each statement ends with `;`.
- `echo` is faster and takes many parameters; `print` returns a value.
- Double quotes read variables; single quotes do not.
- Variables start with `$`; constants use `define()` and have no `$`.
- Use `if`, `switch`, `? :` to make decisions.
- Use `while`, `do...while`, `for` to repeat code; `break` stops, `continue` skips.
