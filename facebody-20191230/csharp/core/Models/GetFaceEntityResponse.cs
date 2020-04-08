// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.Facebody20191230.Models
{
    public class GetFaceEntityResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Data")]
        [Validation(Required=true)]
        public GetFaceEntityResponseData Data { get; set; }
        public class GetFaceEntityResponseData : TeaModel {
            [NameInMap("DbName")]
            [Validation(Required=true)]
            public string DbName { get; set; }
            [NameInMap("EntityId")]
            [Validation(Required=true)]
            public string EntityId { get; set; }
            [NameInMap("Labels")]
            [Validation(Required=true)]
            public string Labels { get; set; }
            [NameInMap("Faces")]
            [Validation(Required=true)]
            public List<GetFaceEntityResponseDataFaces> Faces { get; set; }
            public class GetFaceEntityResponseDataFaces : TeaModel {
                    public string FaceId { get; set; }
            }
        };

    }

}
