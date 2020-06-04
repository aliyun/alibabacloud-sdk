// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Dyvmsapi20170525.Models
{
    public class QueryRobotTaskCallListRequest : TeaModel {
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

        [NameInMap("PageNo")]
        [Validation(Required=false)]
        public int? PageNo { get; set; }

        [NameInMap("PageSize")]
        [Validation(Required=false)]
        public int? PageSize { get; set; }

        [NameInMap("TaskId")]
        [Validation(Required=true)]
        public string TaskId { get; set; }

        [NameInMap("DurationFrom")]
        [Validation(Required=false)]
        public string DurationFrom { get; set; }

        [NameInMap("DurationTo")]
        [Validation(Required=false)]
        public string DurationTo { get; set; }

        [NameInMap("DialogCountFrom")]
        [Validation(Required=false)]
        public string DialogCountFrom { get; set; }

        [NameInMap("DialogCountTo")]
        [Validation(Required=false)]
        public string DialogCountTo { get; set; }

        [NameInMap("HangupDirection")]
        [Validation(Required=false)]
        public string HangupDirection { get; set; }

        [NameInMap("CallResult")]
        [Validation(Required=false)]
        public string CallResult { get; set; }

        [NameInMap("Called")]
        [Validation(Required=false)]
        public string Called { get; set; }

    }

}
