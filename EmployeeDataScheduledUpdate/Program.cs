using EZ.API.Models;
using System;
using System.Collections.Generic;
using System.Data.SqlClient;
using System.Text;

namespace EmployeeDataScheduledUpdate
{
    public class Program
    {
        static void Main(string[] args)
        {
            Console.WriteLine("Start Updating Employee");
            using (var context = new AppDbContext())
            {
                foreach (var item in GetEmployeeData())
                {
                    Console.WriteLine("Currently Updating Employee: " + item.Employee_Name_English);
                    context.Employee.Add(item);
                    context.SaveChangesAsync();
                }
                Console.WriteLine("Successfuly Updated All Employee"); 
            }
            Console.ReadLine();
        }
        public static List<Employee> GetEmployeeData()
        {
            List<Employee> employees = new List<Employee>();
            SqlConnectionStringBuilder builder = new SqlConnectionStringBuilder();
            builder.DataSource = "SKSQL2012.emaarec.com";
            builder.UserID = "mydirectory";
            builder.Password = "P@$$w0rdmydirectory";
            builder.InitialCatalog = "ECM_Employee_info";

            using (SqlConnection connection = new SqlConnection(builder.ConnectionString))
            {
                connection.Open();
                StringBuilder sb = new StringBuilder();
                sb.Append("SELECT ");
                sb.Append("[Emp_ID],[Employee_Name_English],[Employee_Name_Arabic],[Gender],[Position],[PositionArabic]");
                sb.Append(",[Grade],[Cost_Center],[Hiring_Date],[Termination_Date],[Birth_Date],[ID_Iqama],[E_Mail]");
                sb.Append(",[Mobile],[Nationality],[Sponsor],[Line_Manager_No],[Line_Manager_Name],[Line_Manager_Email]");
                sb.Append(",[Department],[Dept_Head_No],[Dept_Head_Name],[Dept_Head_Email],[Employee_Spouse],[Section]");
                sb.Append(",[Cost_Center_HoD],[Function_Head],[Division],[Line_Manager_Name_AP],[Dept_Head_Name_AP],[Oracle_Org_Name]");

                sb.Append("FROM [ECM_Employee_info].[dbo].[Employee_Info_Extended] ");
                String sql = sb.ToString();

                using (SqlCommand command = new SqlCommand(sql, connection))
                {
                    using (SqlDataReader reader = command.ExecuteReader())
                    {

                        while (reader.Read())
                        {
                            Employee employee = new Employee();
                            
                            employee.Emp_ID = (reader.IsDBNull(0) ? "" : reader.GetString(0));
                            employee.Employee_Name_English = (reader.IsDBNull(1) ? "" : reader.GetString(1));
                            employee.Employee_Name_Arabic = (reader.IsDBNull(2) ? "" : reader.GetString(2));
                            employee.Gender = (reader.IsDBNull(3) ? "" : reader.GetString(3));
                            employee.Position = (reader.IsDBNull(4) ? "" : reader.GetString(4));
                            employee.PositionArabic = (reader.IsDBNull(5) ? "" : reader.GetString(5));
                            employee.Grade = (reader.IsDBNull(6) ? "" : reader.GetString(6));
                            employee.Cost_Center = (reader.IsDBNull(7) ? "" : reader.GetString(7));
                            employee.Hiring_Date = (reader.IsDBNull(8) ? "" : reader.GetDateTime(8).ToString("dd MMM yyyy"));//reader.GetDateTime(8).ToString("dd MMM yyyy");
                            employee.Termination_Date = (reader.IsDBNull(9) ? "" : reader.GetDateTime(9).ToString("dd MMM yyyy"));
                            employee.Birth_Date = (reader.IsDBNull(10) ? "" : reader.GetDateTime(10).ToString("dd MMM yyyy"));
                            employee.ID_Iqama = (reader.IsDBNull(11) ? "" : reader.GetString(11));
                            employee.E_Mail = (reader.IsDBNull(12) ? "" : reader.GetString(12));
                            employee.Mobile = (reader.IsDBNull(13) ? "" : reader.GetString(13));
                            employee.Nationality = (reader.IsDBNull(14) ? "" : reader.GetString(14));
                            employee.Sponsor = (reader.IsDBNull(15) ? "" : reader.GetString(15));
                            employee.Line_Manager_No = (reader.IsDBNull(16) ? "" : reader.GetString(16));
                            employee.Line_Manager_Name = (reader.IsDBNull(17) ? "" : reader.GetString(17));
                            employee.Line_Manager_Email = (reader.IsDBNull(18) ? "" : reader.GetString(18));
                            employee.Department = (reader.IsDBNull(19) ? "" : reader.GetString(19));
                            employee.Dept_Head_No = (reader.IsDBNull(20) ? "" : reader.GetString(20));
                            employee.Dept_Head_Name = (reader.IsDBNull(21) ? "" : reader.GetString(21));
                            employee.Dept_Head_Email = (reader.IsDBNull(22) ? "" : reader.GetString(22));
                            employee.Employee_Spouse = (reader.IsDBNull(23) ? "" : reader.GetString(23));
                            employee.Section = (reader.IsDBNull(24) ? "" : reader.GetString(24));
                            employee.Cost_Center_HoD = (reader.IsDBNull(25) ? "" : reader.GetString(25));
                            employee.Function_Head = (reader.IsDBNull(26) ? "" : reader.GetString(26));
                            employee.Division = (reader.IsDBNull(27) ? "" : reader.GetString(27));
                            employee.Line_Manager_Name_AP = (reader.IsDBNull(28) ? "" : reader.GetString(28));
                            employee.Dept_Head_Name_AP = (reader.IsDBNull(29) ? "" : reader.GetString(29));
                            employee.Oracle_Org_Name = (reader.IsDBNull(30) ? "" : reader.GetString(30));
                            employee.Id = System.Guid.NewGuid();
                            employees.Add(employee);
                        }

                    }
                }
            }
            return employees;
        }

    }
}
