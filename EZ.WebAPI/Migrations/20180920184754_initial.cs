using Microsoft.EntityFrameworkCore.Migrations;

namespace EZ.WebAPI.Migrations
{
    public partial class initial : Migration
    {
        protected override void Up(MigrationBuilder migrationBuilder)
        {
            migrationBuilder.CreateTable(
                name: "Employee",
                columns: table => new
                {
                    Id = table.Column<string>(nullable: false),
                    Emp_ID = table.Column<string>(nullable: true),
                    Employee_Name_English = table.Column<string>(nullable: true),
                    Employee_Name_Arabic = table.Column<string>(nullable: true),
                    Gender = table.Column<string>(nullable: true),
                    Position = table.Column<string>(nullable: true),
                    PositionArabic = table.Column<string>(nullable: true),
                    Grade = table.Column<string>(nullable: true),
                    Cost_Center = table.Column<string>(nullable: true),
                    Hiring_Date = table.Column<string>(nullable: true),
                    Termination_Date = table.Column<string>(nullable: true),
                    Birth_Date = table.Column<string>(nullable: true),
                    ID_Iqama = table.Column<string>(nullable: true),
                    E_Mail = table.Column<string>(nullable: true),
                    Mobile = table.Column<string>(nullable: true),
                    Nationality = table.Column<string>(nullable: true),
                    Sponsor = table.Column<string>(nullable: true),
                    Line_Manager_No = table.Column<string>(nullable: true),
                    Line_Manager_Name = table.Column<string>(nullable: true),
                    Line_Manager_Email = table.Column<string>(nullable: true),
                    Department = table.Column<string>(nullable: true),
                    Dept_Head_No = table.Column<string>(nullable: true),
                    Dept_Head_Name = table.Column<string>(nullable: true),
                    Dept_Head_Email = table.Column<string>(nullable: true),
                    Employee_Spouse = table.Column<string>(nullable: true),
                    Section = table.Column<string>(nullable: true),
                    Cost_Center_HoD = table.Column<string>(nullable: true),
                    Function_Head = table.Column<string>(nullable: true),
                    Division = table.Column<string>(nullable: true),
                    Line_Manager_Name_AP = table.Column<string>(nullable: true),
                    Dept_Head_Name_AP = table.Column<string>(nullable: true),
                    Oracle_Org_Name = table.Column<string>(nullable: true)
                },
                constraints: table =>
                {
                    table.PrimaryKey("PK_Employee", x => x.Id);
                });
        }

        protected override void Down(MigrationBuilder migrationBuilder)
        {
            migrationBuilder.DropTable(
                name: "Employee");
        }
    }
}
