// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Imageaudit20191230.Models
{
    public class ScanTextRequest : TeaModel {
        [NameInMap("Tasks")]
        [Validation(Required=true)]
        public List<ScanTextRequestTasks> Tasks { get; set; }
        public class ScanTextRequestTasks : TeaModel {
            [NameInMap("Content")]
            [Validation(Required=true)]
            public string Content { get; set; }

        }

        [NameInMap("Labels")]
        [Validation(Required=true)]
        public List<ScanTextRequestLabels> Labels { get; set; }
        public class ScanTextRequestLabels : TeaModel {
            [NameInMap("Label")]
            [Validation(Required=true)]
            public string Label { get; set; }

        }

    }

}
