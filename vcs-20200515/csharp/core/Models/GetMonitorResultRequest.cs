// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Vcs20200515.Models
{
    public class GetMonitorResultRequest : TeaModel {
        [NameInMap("CorpId")]
        [Validation(Required=true)]
        public string CorpId { get; set; }

        [NameInMap("TaskId")]
        [Validation(Required=true)]
        public string TaskId { get; set; }

        [NameInMap("MinRecordId")]
        [Validation(Required=false)]
        public string MinRecordId { get; set; }

        [NameInMap("StartTime")]
        [Validation(Required=false)]
        public long StartTime { get; set; }

        [NameInMap("EndTime")]
        [Validation(Required=false)]
        public long EndTime { get; set; }

    }

}
