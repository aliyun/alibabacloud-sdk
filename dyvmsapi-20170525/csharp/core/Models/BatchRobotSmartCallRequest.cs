// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Dyvmsapi20170525.Models
{
    public class BatchRobotSmartCallRequest : TeaModel {
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

        [NameInMap("CalledShowNumber")]
        [Validation(Required=true)]
        public string CalledShowNumber { get; set; }

        [NameInMap("CorpName")]
        [Validation(Required=false)]
        public string CorpName { get; set; }

        [NameInMap("CalledNumber")]
        [Validation(Required=true)]
        public string CalledNumber { get; set; }

        [NameInMap("DialogId")]
        [Validation(Required=true)]
        public string DialogId { get; set; }

        [NameInMap("EarlyMediaAsr")]
        [Validation(Required=false)]
        public bool? EarlyMediaAsr { get; set; }

        [NameInMap("TaskName")]
        [Validation(Required=true)]
        public string TaskName { get; set; }

        [NameInMap("ScheduleTime")]
        [Validation(Required=false)]
        public long ScheduleTime { get; set; }

        [NameInMap("ScheduleCall")]
        [Validation(Required=false)]
        public bool? ScheduleCall { get; set; }

        [NameInMap("TtsParam")]
        [Validation(Required=false)]
        public string TtsParam { get; set; }

        [NameInMap("TtsParamHead")]
        [Validation(Required=false)]
        public string TtsParamHead { get; set; }

        [NameInMap("IsSelfLine")]
        [Validation(Required=false)]
        public bool? IsSelfLine { get; set; }

    }

}
