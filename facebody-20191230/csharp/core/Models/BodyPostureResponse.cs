// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.Facebody.Models
{
    public class BodyPostureResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Data")]
        [Validation(Required=true)]
        public BodyPostureResponseData Data { get; set; }
        public class BodyPostureResponseData : TeaModel {
            [NameInMap("Outputs")]
            [Validation(Required=true)]
            public List<BodyPostureResponseDataOutputs> Outputs { get; set; }
            public class BodyPostureResponseDataOutputs : TeaModel {
                    public int? HumanCount { get; set; }
                    public List<BodyPostureResponseDataOutputsResults> Results { get; set; }
                    public class BodyPostureResponseDataOutputsResults : TeaModel {
                            public List<BodyPostureResponseDataOutputsResultsBodies> Bodies { get; set; }
                            public class BodyPostureResponseDataOutputsResultsBodies : TeaModel {
                                    public float? Confident { get; set; }
                                    public string Label { get; set; }
                                    public List<BodyPostureResponseDataOutputsResultsBodiesPositions> Positions { get; set; }
                                    public class BodyPostureResponseDataOutputsResultsBodiesPositions : TeaModel {
                                            public List<string> Points { get; set; }
                                    }
                            }
                    }
            }
            [NameInMap("MetaObject")]
            [Validation(Required=true)]
            public BodyPostureResponseDataMetaObject MetaObject { get; set; }
            public class BodyPostureResponseDataMetaObject : TeaModel {
                [NameInMap("Height")]
                [Validation(Required=true)]
                public int? Height { get; set; }

                [NameInMap("Width")]
                [Validation(Required=true)]
                public int? Width { get; set; }

            }
        };

    }

}
