// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Rds20140815.Models
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
                    public string DBInstanceId { get; set; }
                    public string Engine { get; set; }
                    public string DBStatus { get; set; }
                    public string CharacterSetName { get; set; }
                    public string DBDescription { get; set; }
                    public DescribeDatabasesResponseDatabasesDatabaseAccounts Accounts { get; set; }
                    public class DescribeDatabasesResponseDatabasesDatabaseAccounts : TeaModel {
                        [NameInMap("AccountPrivilegeInfo")]
                        [Validation(Required=true)]
                        public List<DescribeDatabasesResponseDatabasesDatabaseAccountsAccountPrivilegeInfo> AccountPrivilegeInfo { get; set; }
                        public class DescribeDatabasesResponseDatabasesDatabaseAccountsAccountPrivilegeInfo : TeaModel {
                            [NameInMap("Account")]
                            [Validation(Required=true)]
                            public string Account { get; set; }

                            [NameInMap("AccountPrivilege")]
                            [Validation(Required=true)]
                            public string AccountPrivilege { get; set; }

                            [NameInMap("AccountPrivilegeDetail")]
                            [Validation(Required=true)]
                            public string AccountPrivilegeDetail { get; set; }

                        }

                    }
            }
        };

    }

}
