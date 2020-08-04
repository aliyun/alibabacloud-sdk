// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Ecs20140526.Models
{
    public class AttachInstanceRamRoleResponse : TeaModel {
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

        [NameInMap("AttachInstanceRamRoleResults")]
        [Validation(Required=true)]
        public AttachInstanceRamRoleResponseAttachInstanceRamRoleResults AttachInstanceRamRoleResults { get; set; }
        public class AttachInstanceRamRoleResponseAttachInstanceRamRoleResults : TeaModel {
            [NameInMap("AttachInstanceRamRoleResult")]
            [Validation(Required=true)]
            public List<AttachInstanceRamRoleResponseAttachInstanceRamRoleResultsAttachInstanceRamRoleResult> AttachInstanceRamRoleResult { get; set; }
            public class AttachInstanceRamRoleResponseAttachInstanceRamRoleResultsAttachInstanceRamRoleResult : TeaModel {
                    public string InstanceId { get; set; }
                    public bool? Success { get; set; }
                    public string Code { get; set; }
                    public string Message { get; set; }
            }
        };

    }

}
