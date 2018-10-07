using System;
using System.Collections.Generic;
using System.IO;
using System.Linq;
using System.Threading.Tasks;
using Microsoft.EntityFrameworkCore;
using Microsoft.EntityFrameworkCore.Design;
using Microsoft.Extensions.Configuration;

namespace EZ.API.Models
{
    public class AppDbContext : DbContext
    {
        public AppDbContext (DbContextOptions<AppDbContext> options)
            : base(options)
        {
        }

        public DbSet<EZ.API.Models.Employee> Employee { get; set; }

        /// <summary>
        /// Called when executing migration
        /// Define to remove exception "Add an implementation of ‘IDesignTimeDbContextFactory’ to the project"
        /// https://codingblast.com/entityframework-core-add-implementation-idesigntimedbcontextfactory-multiple-dbcontexts/
        /// </summary>
        public class DesignTimeDbContextFactory : IDesignTimeDbContextFactory<AppDbContext>
        {
            public AppDbContext CreateDbContext(string[] args)
            {
                var builder = OptionsBuilder();
                return new AppDbContext(builder.Options);
            }

            public DbContextOptionsBuilder<AppDbContext> OptionsBuilder()
            {
                IConfigurationRoot configuration = new ConfigurationBuilder()
                    .SetBasePath(Directory.GetCurrentDirectory())
                    .AddJsonFile("appsettings.json")
                    .Build();
                var builder = new DbContextOptionsBuilder<AppDbContext>();
                var connectionString = configuration.GetConnectionString("DefaultConnection");
                builder.UseSqlServer(connectionString);
                return builder;
            }
        }

    }
}
