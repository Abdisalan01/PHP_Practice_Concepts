# Assignment 1 — Conditions and Loops

This assignment practices what we learned in **Week 2**: variables, operators, `if / elseif / else`, and loops (`for`, `while`).

📄 **activity-01.php … activity-10.php** — one file for each activity
📁 **[Screen_Shot](Screen_Shot/)** — picture of each file (code + output), plus a [README](Screen_Shot/README.md) that explains the code.

---

## The activities

| # | File | Question | Result |
|---|---|---|---|
| 1 | [activity-01.php](activity-01.php) | Find the **largest** and **smallest** of three numbers (12, 5, 9) | Largest 12, smallest 5 |
| 2 | [activity-02.php](activity-02.php) | Check if a number (15) is divisible by **3**, by **5**, by both, or by none | Divisible by 3 and 5 |
| 3 | [activity-03.php](activity-03.php) | Print **odd** numbers from 2 to 20 and **even** numbers from 35 down to 7 | 3 5 7 … 19 / 34 32 … 8 |
| 4 | [activity-04.php](activity-04.php) | Print numbers from 50 down to 2 that are divisible by **2 and 5** | 50 40 30 20 10 |
| 5 | [activity-05.php](activity-05.php) | **Reverse** the number 12345 | 54321 |
| 6 | [activity-06.php](activity-06.php) | Find the **LCM** of 8 and 12 | 24 |
| 7 | [activity-07.php](activity-07.php) | Find the **HCF** of 18 and 24 | 6 |
| 8 | [activity-08.php](activity-08.php) | Print a **12 × 12 multiplication table** | HTML table |
| 9 | [activity-09.php](activity-09.php) | Check if 29 is a **prime** number | 29 is prime |
| 10 | [activity-10.php](activity-10.php) | Print all **prime numbers from 10 to 50** | 11 13 17 … 47 |

---

## Concepts used

### The `%` operator (remainder)
`%` gives the **remainder** after division.
- `15 % 3` → `0` → 15 **is divisible** by 3.
- `7 % 2` → `1` → 7 is **odd**.
- `12345 % 10` → `5` → the **last digit**.

| Check | Code |
|---|---|
| Is `$n` even? | `$n % 2 == 0` |
| Is `$n` odd? | `$n % 2 == 1` |
| Is `$n` divisible by 5? | `$n % 5 == 0` |

### Logical operators
- `&&` (and) — **both** conditions must be true.
- `||` (or) — **one** condition is enough.

### Loops
- `for` — when we know how many times: `for ($i = 1; $i <= 10; $i++)`
- `while` — repeat while a condition is true.
- Counting **down**: start big and use `$i--`.
- **Nested loop** — a loop inside a loop (used for the table and for prime numbers).

### Math words
- **LCM** (Lowest Common Multiple) — the **smallest** number that both numbers divide. LCM of 8 and 12 = 24.
- **HCF** (Highest Common Factor) — the **biggest** number that divides both numbers. HCF of 18 and 24 = 6.
- **Prime number** — a number that has **only 2 divisors**: 1 and itself (2, 3, 5, 7, 11 …).

---

## How to run

1. Copy the `Assignment 1` folder into `C:\xampp\htdocs\` and rename it to `assignment1`.
2. Start **Apache** in XAMPP.
3. Open `http://localhost/assignment1/activity-01.php` (change the number for other activities).
