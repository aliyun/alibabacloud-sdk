// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Dyvmsapi20170525.Models
{
    public class CreateRobotTaskRequest : TeaModel {
        [NameInMap("AccessKeyId")]
        [Validation(Required=false)]
        public string AccessKeyId { get; set; }

        [NameInMap("OwnerId")]
        [Validation(Required=false)]
        public long OwnerId { get; set; }

        [NameInMap("ResourceOwnerAccount")]
        [Validation(Required=false)]
        public string ResourceOwnerAccount { get; set; }

        [NameInMap("ResourceOwnerId")]
        [Validation(Required=false)]
        public long ResourceOwnerId { get; set; }

        [NameInMap("TaskName")]
        [Validation(Required=true)]
        public string TaskName { get; set; }

        [NameInMap("DialogId")]
        [Validation(Required=true)]
        public long DialogId { get; set; }

        [NameInMap("CorpName")]
        [Validation(Required=false)]
        public string CorpName { get; set; }

        [NameInMap("Caller")]
        [Validation(Required=true)]
        public string Caller { get; set; }

        [NameInMap("NumberStatusIdent")]
        [Validation(Required=true)]
        public bool? NumberStatusIdent { get; set; }

        [NameInMap("RetryType")]
        [Validation(Required=true)]
        public int? RetryType { get; set; }

        [NameInMap("RecallStateCodes")]
        [Validation(Required=false)]
        public string RecallStateCodes { get; set; }

        [NameInMap("RecallTimes")]
        [Validation(Required=false)]
        public int? RecallTimes { get; set; }

        [NameInMap("RecallInterval")]
        [Validation(Required=false)]
        public int? RecallInterval { get; set; }

        [NameInMap("IsSelfLine")]
        [Validation(Required=false)]
        public bool? IsSelfLine { get; set; }

    }

}
