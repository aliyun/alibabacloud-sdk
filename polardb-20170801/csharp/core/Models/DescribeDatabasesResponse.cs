// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Polardb20170801.Models
{
    public class DescribeDatabasesResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Databases")]
        [Validation(Required=true)]
        public DescribeDatabasesResponseDatabases Databases { get; set; }
        public class DescribeDatabasesResponseDatabases : TeaModel {
            [NameInMap("Database")]
            [Validation(Required=true)]
            public List<DescribeDatabasesResponseDatabasesDatabase> Database { get; set; }
            public class DescribeDatabasesResponseDatabasesDatabase : TeaModel {
                    public string DBName { get; set; }
                    public string DBStatus { get; set; }
                    public string DBDescription { get; set; }
                    public string CharacterSetName { get; set; }
                    public string Engine { get; set; }
                    public DescribeDatabasesResponseDatabasesDatabaseAccounts Accounts { get; set; }
                    public class DescribeDatabasesResponseDatabasesDatabaseAccounts : TeaModel {
                        [NameInMap("Account")]
                        [Validation(Required=true)]
                        public List<DescribeDatabasesResponseDatabasesDatabaseAccountsAccount> Account { get; set; }
                        public class DescribeDatabasesResponseDatabasesDatabaseAccountsAccount : TeaModel {
                            [NameInMap("AccountName")]
                            [Validation(Required=true)]
                            public string AccountName { get; set; }

                            [NameInMap("AccountStatus")]
                            [Validation(Required=true)]
                            public string AccountStatus { get; set; }

                            [NameInMap("AccountPrivilege")]
                            [Validation(Required=true)]
                            public string AccountPrivilege { get; set; }

                            [NameInMap("PrivilegeStatus")]
                            [Validation(Required=true)]
                            public string PrivilegeStatus { get; set; }

                        }

                    }
            }
        };

    }

}
