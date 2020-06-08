// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Rds20140815.Models
{
    public class DescribeAccountsResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("SystemAdminAccountStatus")]
        [Validation(Required=true)]
        public string SystemAdminAccountStatus { get; set; }

        [NameInMap("SystemAdminAccountFirstActivationTime")]
        [Validation(Required=true)]
        public string SystemAdminAccountFirstActivationTime { get; set; }

        [NameInMap("Accounts")]
        [Validation(Required=true)]
        public DescribeAccountsResponseAccounts Accounts { get; set; }
        public class DescribeAccountsResponseAccounts : TeaModel {
            [NameInMap("DBInstanceAccount")]
            [Validation(Required=true)]
            public List<DescribeAccountsResponseAccountsDBInstanceAccount> DBInstanceAccount { get; set; }
            public class DescribeAccountsResponseAccountsDBInstanceAccount : TeaModel {
                    public string DBInstanceId { get; set; }
                    public string AccountName { get; set; }
                    public string AccountStatus { get; set; }
                    public string AccountType { get; set; }
                    public string AccountDescription { get; set; }
                    public string PrivExceeded { get; set; }
                    public DescribeAccountsResponseAccountsDBInstanceAccountDatabasePrivileges DatabasePrivileges { get; set; }
                    public class DescribeAccountsResponseAccountsDBInstanceAccountDatabasePrivileges : TeaModel {
                        [NameInMap("DatabasePrivilege")]
                        [Validation(Required=true)]
                        public List<DescribeAccountsResponseAccountsDBInstanceAccountDatabasePrivilegesDatabasePrivilege> DatabasePrivilege { get; set; }
                        public class DescribeAccountsResponseAccountsDBInstanceAccountDatabasePrivilegesDatabasePrivilege : TeaModel {
                            [NameInMap("DBName")]
                            [Validation(Required=true)]
                            public string DBName { get; set; }

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
