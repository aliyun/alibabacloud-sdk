// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Ecs20140526.Models
{
    public class DetachInstanceRamRoleResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("TotalCount")]
        [Validation(Required=true)]
        public int? TotalCount { get; set; }

        [NameInMap("FailCount")]
        [Validation(Required=true)]
        public int? FailCount { get; set; }

        [NameInMap("RamRoleName")]
        [Validation(Required=true)]
        public string RamRoleName { get; set; }

        [NameInMap("DetachInstanceRamRoleResults")]
        [Validation(Required=true)]
        public DetachInstanceRamRoleResponseDetachInstanceRamRoleResults DetachInstanceRamRoleResults { get; set; }
        public class DetachInstanceRamRoleResponseDetachInstanceRamRoleResults : TeaModel {
            [NameInMap("DetachInstanceRamRoleResult")]
            [Validation(Required=true)]
            public List<DetachInstanceRamRoleResponseDetachInstanceRamRoleResultsDetachInstanceRamRoleResult> DetachInstanceRamRoleResult { get; set; }
            public class DetachInstanceRamRoleResponseDetachInstanceRamRoleResultsDetachInstanceRamRoleResult : TeaModel {
                    public string InstanceId { get; set; }
                    public bool? Success { get; set; }
                    public string Code { get; set; }
                    public string Message { get; set; }
                    public DetachInstanceRamRoleResponseDetachInstanceRamRoleResultsDetachInstanceRamRoleResultInstanceRamRoleSets InstanceRamRoleSets { get; set; }
                    public class DetachInstanceRamRoleResponseDetachInstanceRamRoleResultsDetachInstanceRamRoleResultInstanceRamRoleSets : TeaModel {
                        [NameInMap("InstanceRamRoleSet")]
                        [Validation(Required=true)]
                        public List<DetachInstanceRamRoleResponseDetachInstanceRamRoleResultsDetachInstanceRamRoleResultInstanceRamRoleSetsInstanceRamRoleSet> InstanceRamRoleSet { get; set; }
                        public class DetachInstanceRamRoleResponseDetachInstanceRamRoleResultsDetachInstanceRamRoleResultInstanceRamRoleSetsInstanceRamRoleSet : TeaModel {
                            [NameInMap("InstanceId")]
                            [Validation(Required=true)]
                            public string InstanceId { get; set; }

                            [NameInMap("RamRoleName")]
                            [Validation(Required=true)]
                            public string RamRoleName { get; set; }

                        }

                    }
            }
        };

    }

}
