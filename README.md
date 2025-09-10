🚀 TaskFlow - Ultimate Task Management Solution
https://img.shields.io/badge/ASP.NET_Core-8.0-purple?style=for-the-badge
https://img.shields.io/badge/Bootstrap-5.0-blue?style=for-the-badge
https://img.shields.io/badge/License-MIT-green?style=for-the-badge
https://img.shields.io/badge/Status-Active-brightgreen?style=for-the-badge

https://via.placeholder.com/1200x400/667eea/ffffff?text=TaskFlow+-+Elegant+Task+Management

A sophisticated, modern task management application built with ASP.NET Core MVC that helps you organize your workflow with style and efficiency.

✨ Features
🎯 Core Functionality
✅ Task Management - Create, read, update, and delete tasks

🎨 Priority System - 4-level priority (Low, Medium, High, Critical)

📊 Status Tracking - Todo, In Progress, Completed statuses

📅 Due Dates - Set and track deadlines

🔐 User Authentication - Secure individual user accounts

🎨 Premium Design
Modern UI/UX - Glass morphism and gradient designs

Dark Theme - Elegant dark mode interface

Responsive Design - Flawless experience on all devices

Smooth Animations - Beautiful transitions and effects

Professional Typography - Inter font family

⚡ Technical Excellence
ASP.NET Core 8.0 - Latest stable framework

Entity Framework Core - Robust data management

Identity Framework - Secure authentication system

Bootstrap 5 - Modern responsive framework

jQuery & AJAX - Smooth asynchronous operations

🖥️ Screenshots
Dashboard	Task Management	Mobile View
https://via.placeholder.com/400x250/667eea/ffffff?text=Premium+Dashboard	https://via.placeholder.com/400x250/764ba2/ffffff?text=Task+Management	https://via.placeholder.com/400x250/1a1a2e/ffffff?text=Mobile+Friendly
🚀 Quick Start
Prerequisites
.NET 8.0 SDK

SQL Server (LocalDB included with Visual Studio)

Git

Installation
Clone the repository

bash
git clone https://github.com/Thang-bq/TaskFlow.git
cd TaskFlow
Restore dependencies

bash
dotnet restore
Apply database migrations

bash
dotnet ef database update
Run the application

bash
dotnet run
Open in browser
Navigate to https://localhost:7000 (or your assigned port)

🏗️ Project Structure
text
TaskFlow/
├── Controllers/
│   └── TaskController.cs
├── Models/
│   └── Entities/
│       ├── TaskItem.cs
│       └── Category.cs
├── Views/
│   ├── Home/
│   │   └── Index.cshtml
│   └── Task/
│       ├── Index.cshtml
│       └── Create.cshtml
├── Data/
│   └── ApplicationDbContext.cs
└── Migrations/
    └── Database schema files
🛠️ Technology Stack
Backend: ASP.NET Core 8.0 MVC

Frontend: HTML5, CSS3, JavaScript, Bootstrap 5

Database: SQL Server with Entity Framework Core

Authentication: ASP.NET Core Identity

Styling: Custom CSS with modern design principles

Icons: Font Awesome 6.0

Fonts: Google Fonts (Inter)

📋 Usage Guide
Creating Your First Task
Register a new account or login

Click "Create New Task" button

Fill in task details (title, description, priority, due date)

Save your task

Managing Tasks
View All Tasks: Dashboard shows all your tasks in card layout

Update Status: Click "Complete" to mark tasks as done

Delete Tasks: Remove tasks you no longer need

Filter by Priority: Visual priority indicators (color-coded badges)

Keyboard Shortcuts
Ctrl + N - Create new task (where available)

Enter - Submit forms

Esc - Cancel actions

🌟 Upcoming Features
Advanced Filtering - Filter by category, priority, and status

Task Categories - Organize tasks into custom categories

File Attachments - Add files to tasks

Email Notifications - Reminders for due tasks

Team Collaboration - Share tasks with team members

Calendar View - Visual timeline of tasks

Data Export - Export tasks to CSV/PDF

API Access - REST API for integration

🐛 Troubleshooting
Common Issues
Database Connection Errors

Ensure SQL Server is running

Check connection string in appsettings.json

Migration Issues

bash
dotnet ef migrations remove
dotnet ef migrations add InitialCreate
dotnet ef database update
Build Errors

Clean solution: dotnet clean

Restore packages: dotnet restore

Rebuild: dotnet build

Getting Help
If you encounter any issues:

Check the ASP.NET Core documentation

Search existing GitHub Issues

Create a new issue with detailed description

🤝 Contributing
We welcome contributions! Please feel free to submit pull requests or open issues for bugs and feature requests.

Development Setup
Fork the repository

Create a feature branch: git checkout -b feature/amazing-feature

Commit changes: git commit -m 'Add amazing feature'

Push to branch: git push origin feature/amazing-feature

Open a pull request

📄 License
This project is licensed under the MIT License - see the LICENSE.md file for details.

👨‍💻 Developer
Bùi Quang Thắng - QuangThang.Contact@gmail.com

GitHub: @Thang-bq

Project Link: https://github.com/Thang-bq/TaskFlow

🙏 Acknowledgments
ASP.NET Core team for the amazing framework

Bootstrap team for the responsive frontend framework

Font Awesome for the beautiful icons

All contributors and users of TaskFlow

<div align="center">
⭐ Star this repo if you found it helpful!

https://img.shields.io/github/stars/Thang-bq/TaskFlow?style=social
https://img.shields.io/github/forks/Thang-bq/TaskFlow?style=social

Built with ❤️ using ASP.NET Core

</div>
For more information, questions, or suggestions, please contact QuangThang.Contact@gmail.com

