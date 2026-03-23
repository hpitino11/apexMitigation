# 🚧 Apex Mitigation — Website

Production website built for **Apex Mitigation**, a Florida-based water damage mitigation and restoration company.  
Developed as a freelance, full-stack solution focused on performance, clarity, and real-world business needs.

---

## 📌 Overview

Apex Mitigation provides emergency restoration services across Florida, including:

- 💧 Water damage removal & demolition  
- 🌬️ Structural drying  
- 📊 Xactimate insurance estimating  
- ❄️ Dry ice blasting  

🚨 **24/7 emergency response**

---

## 🛠️ Tech Stack

| Layer        | Technology |
|--------------|-----------|
| Backend      | Laravel 11 |
| Frontend     | Blade + Tailwind CSS |
| Build Tool   | Vite |
| Database     | MySQL |

---

## ✨ Key Features

- 📱 Responsive, mobile-first design  
- 🔍 Service-focused layout for SEO + conversions  
- ⚡ Optimized asset loading with Vite  
- 🧩 Clean Blade component structure  
- 🔒 Environment-based configuration for production  
- 📈 Built to support real client lead generation  

---

## 🚀 Local Development Setup

### 📋 Requirements

- PHP 8.2+  
- Composer  
- Node.js + npm  
- MySQL  

---

### 📥 Installation

```bash
# Clone repository
git clone https://github.com/yourusername/your-repo.git
cd your-repo
```

```bash
# Install dependencies
composer install
npm install
```

```bash
# Environment setup
cp .env.example .env
php artisan key:generate
```

Update your `.env` file:

```env
DB_DATABASE=your_db_name
DB_USERNAME=root
DB_PASSWORD=your_password
```

```bash
# Run database migrations
php artisan migrate
```

---

### ▶️ Run the Application

```bash
# Terminal 1 — Laravel server
php artisan serve
```

```bash
# Terminal 2 — Vite asset compiler
npm run dev
```

🌐 Open in browser:
```
http://localhost:8000
```

---

## 📁 Project Notes

- ⚠️ Do **not** open the Vite dev server (`5173`)  
- 🔐 `.env` is excluded from version control — never commit it  
- 📦 Static assets are located in:

```
public/assets/
```

---

## 💼 Business Context

This project was built for a real client to:

- Improve online presence  
- Generate inbound leads  
- Clearly communicate services  
- Provide fast access to emergency contact  

📧 Contact: Tyler@apexmitigation.com  

---

## 📄 License

This project is for client use and is not intended for redistribution.